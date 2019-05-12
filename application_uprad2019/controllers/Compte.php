<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Compte extends MY_Controller
{
    private $tableMembre = 'membre';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('General_model');
        $this->layout->setTheme('backoffice');
    }

    /**
     * cette méthode traite la connexion des abonnées vers l'admin
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

    /**
     * cette méthode traite la deconnexion
     * @return void
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('compte');
    }

    /**
     * cette méthode traite l'affichage des membres adhérants 
     * @param integer $_idmembre //cette identifiant est facultatif
     */
    public function getAdherant($_idmembre = null)
    {
        if ($this->session->userdata['logged_in'] != 1) {
            redirect('compte');
        }
        if (!empty($_idmembre) && is_numeric($_idmembre)) {
            $dataUpdate = array('etat' => 1);
            $this->General_model->ModifierDonnesEnBase($_idmembre, $dataUpdate, $this->tableMembre);
            $this->session->set_flashdata('success', ENREGISTREMENT);
        }
        $data['title'] = 'Adherant';
        $data['membres'] = $this->General_model->AfficherDesDonnes($this->tableMembre);
        $this->layout->view('compte/adherant', $data);
    }

    /**
     *  cette méthode traite l'ajout d'un adhérant
     */
    public function addAdherant()
    {
        if ($this->session->userdata['logged_in'] != 1) {
            redirect('compte');
        }
        $data['title'] = 'Ajout membre';
        if ($this->input->post()) {
            $this->form_validation->set_rules('nom', 'nom', 'trim|required');
            $this->form_validation->set_rules('prenom', 'prenom', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|valid_email|required');
            if ($this->form_validation->run() == true) {
                //traitement de l'ajout d'un fichier 
                $filename = "";
                if ($_FILES['fichier']['name']) {
                    $config['upload_path'] = './assets/photos/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
                    $config['max_size'] = 2024 * 2;
                    $config['encrypt_name'] = FALSE;
                    $config['file_name'] = $_FILES['fichier']['name'];
                    $filename = $config['file_name'];
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload("fichier")) {
                        $data['uploadError'] = array('error' => $this->upload->display_errors(), 'file' => 'Fichier chargement');
                    } else {
                        $data['uploadSuccess'] = array('upload_data' => $this->upload->data());
                    }
                }
                $dataInsert = array(
                    'civilite' => $this->input->post('civilite'),
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'adresse' => $this->input->post('adresse'),
                    'cp' => $this->input->post('cp'),
                    'ville' => $this->input->post('ville'),
                    'pays' => $this->input->post('pays'),
                    'fonction' => $this->input->post('fonction'),
                    'photo' => $filename,
                    'etat' => $this->input->post('etat'),
                    'dateAdhesion' => date("Y-m-d H:i:s")
                );
                $ajoutArticlie = $this->General_model->AjoutDonnesEnBase($dataInsert, $this->tableMembre);
                redirect('admin-uprad/adherant');
                $this->session->set_flashdata('success', ENREGISTREMENT);
            }
        }
        $this->layout->view('compte/ajout-adherant', $data);
    }

    /**
     * cette méthode traite la modificatio d'un adherant
     * @param integer $_idmembre 
     */
    public function updateAdherant($_idmembre = null)
    {
        if ($this->session->userdata['logged_in'] != 1) {
            redirect('compte');
        }
        $data['title'] = 'Modifier un membre';
        if (!empty($_idmembre) && is_numeric($_idmembre)) {
            $data['editer'] = $this->General_model->AfficherUneDonnes($_idmembre, $this->tableMembre);
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('nom', 'nom', 'trim|required');
            $this->form_validation->set_rules('prenom', 'prenom', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|valid_email|required');
            if ($this->form_validation->run() == true) {
                //traitement de l'ajout d'un fichier 
                $filename = "";
                if ($_FILES['fichier']['name']) {
                    $config['upload_path'] = './assets/photos/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
                    $config['max_size'] = 2024 * 2;
                    $config['encrypt_name'] = FALSE;
                    $config['file_name'] = $_FILES['fichier']['name'];
                    $filename = $config['file_name'];
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload("fichier")) {
                        $data['uploadError'] = array('error' => $this->upload->display_errors(), 'file' => 'Fichier chargement');
                    } else {
                        $data['uploadSuccess'] = array('upload_data' => $this->upload->data());
                    }
                }
                $dataUpdate = array(
                    'civilite' => $this->input->post('civilite'),
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'adresse' => $this->input->post('adresse'),
                    'cp' => $this->input->post('cp'),
                    'ville' => $this->input->post('ville'),
                    'pays' => $this->input->post('pays'),
                    'fonction' => $this->input->post('fonction'),
                    'etat' => $this->input->post('etat'),
                    'dateAdhesion' => date("Y-m-d H:i:s")
                );
                if (!empty($filename)) { //On verifie s'il y a une photo on écrase l'ancien sinon on fait rien
                    $dataUpdate['photo'] = $filename;
                }
                $this->General_model->ModifierDonnesEnBase($this->input->post('id'), $dataUpdate, $this->tableMembre);
                $this->session->set_flashdata('success', ENREGISTREMENT);
                redirect('admin-uprad/adherant');
            }
        }
        $this->layout->view('compte/ajout-adherant', $data);
    }

    /**
     * cette méthode supprime les données en base
     * @param integer $_idmemebre
     */
    public function deleteAdherant($_idmembre)
    {
        if (!empty($_idmembre) && is_numeric($_idmembre)) {
            $this->General_model->SupprimerLesDonnes($_idmembre, $this->tableMembre);
            $this->session->set_flashdata('success', SUPPRESSION);
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
}
