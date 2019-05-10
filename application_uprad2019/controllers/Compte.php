<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Compte extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('General_model');
    }

    /**
     * cette méthode traite la connexion des abonnées vers l'admin
     *  
     * */
    public function index()
    {
        if ($this->input->post()) {
            $this->layout->setTitre("Connexion");
            $this->form_validation->set_rules('login', 'Nom d\'utilisateur', 'trim|required');
            $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', 'Nom d\'utilisateur et/ou mot de passe incorrect(s)');
            } else {
                $username = $this->input->post('login');
                $password = $this->input->post('password');
                $authOK = $this->General_model->authentification($username, $password);
                if (!empty($authOK['email'])) {
                    redirect('admin-uprad');
                } else {
                    $this->session->set_flashdata('error', 'Nom d\'utilisateur et/ou mot de passe incorrect(s)');
                    redirect('compte');
                }
                $this->session->userdata['dont_check_organisation_ip'] = true;
            }
        }

        $this->load->view('compte/index');
    }
}
