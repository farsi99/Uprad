<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends MY_Controller
{
    private $tableArticle = 'article';
    private $tableTemoignage = 'temoignage';
    private $tableGalerie = 'galerie';
    private $tableMembre = 'membre';
    private $tableEquipe = 'equipe';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('General_model');
        setlocale(LC_ALL, 'fr_FR');
    }

    /**
     * Cette méthode traite l'affichage de la home page
     *
     * @return array|bool
     */
    public function index()
    {
        $this->layout->setTitre('UPRAD : Union populaire République Algérienne Démocratique');
        $data['actus'] = $this->General_model->Touslesactualites(null, 1, 5, 1);
        $data['temoignages'] = $this->General_model->AfficherDesDonnes($this->tableTemoignage);
        $data['galeries'] = $this->General_model->AfficherDesDonnes($this->tableGalerie);
        $data['membre'] = $this->General_model->AfficherDesDonnes($this->tableMembre);
        $data['equipe'] = $this->General_model->AfficherDesDonnes($this->tableEquipe);
        $this->layout->view('accueil/accueil', $data);
    }

    public function apropos()
    {
        $this->layout->view('accueil/apropos');
    }

    public function getEvenement()
    {
        $this->layout->view('accueil/evenement');
    }

    public function addEvenement()
    {
        $this->layout->view('accueil/ajout-evenement');
    }

    public function addAdhesion()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('civilite', 'Civilité', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('mail', 'mail', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('adresse', 'adresse', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('cp', 'cp', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('ville', 'ville', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('pays', 'pays', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('phone', 'phone', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('fonction', 'fonction', 'trim|required|min_length[3]');
        }
        $this->layout->view('accueil/ajout-membre');
    }
}
