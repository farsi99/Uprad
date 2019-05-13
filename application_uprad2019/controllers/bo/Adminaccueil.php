<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminaccueil extends MY_Controller
{
    private $tableArticle = 'article';
    private $tableAssociation = 'ass-station-article';
    private $tableSalon = 'salonidee';
    private $tableEvent = 'evenement';

    public function __construct()
    {
        parent::__construct();
        $this->layout->setTheme('backoffice');
        $this->load->model('General_model');
        $this->load->library('slug');
        if ($this->session->userdata['logged_in'] != 1) {
            redirect('compte');
        }
    }

    /**
     * Cette méthode traite l'affichage de la home page
     *
     * @return array|bool
     */
    public function index()
    {
        $data['title'] = "Tableau de bord";
        $this->layout->view('bo/accueil/accueil', $data);
    }

    /**
     * cette méthode traite l'affichage des actulités dans son ensemble ou par catégorie
     * @param integer $_idstation, cette parametre peut etre null
     * @return array|boolean
     * 
     */
    public function getActualite($_idstation = null)
    {
        if (is_numeric($_idstation) && !empty($_idstation)) {
            $data['actualites'] = $this->General_model->Touslesactualites($_idstation, 1);
        } else {
            $data['actualites'] = $this->General_model->Touslesactualites(null, 1);
        }
        $data['title'] = 'actualité';
        $this->layout->view('bo/accueil/actualites', $data);
    }

    /**
     * cette méthode traite l'affichage des pages dans son ensemble 
     * @return array|boolean
     * 
     */
    public function getPage()
    {
        $data['title'] = 'page';
        $data['actualites'] = $this->General_model->Touslesactualites(null, 2);
        $this->layout->view('bo/accueil/pages', $data);
    }


    /**
     * cette méthode permet d'ajouter un actualité ou une page
     *
     * @return void
     */
    public function addActualite()
    {
        $url = $this->uri->segment(2); //On recupere le lien, pour savoir si c'est une page ou article

        $data['stations'] = $this->General_model->Touslesstations();
        if ($this->input->post() && $this->input->post('verif') == null) {

            $this->form_validation->set_rules('titre', 'Titre', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('contenu', 'Contenu', 'trim|required|min_length[10]');
            if ($this->form_validation->run() == TRUE) {
                //traitement de l'ajout d'un fichier 
                $filename = "";
                if ($_FILES['fichier']['name']) {
                    $config['upload_path'] = './assets/img/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|svg|doc|docx|pdf';
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
                if ($this->input->post('id_type') == 1) { //Quand il s'agit d'un article
                    $dataInsert = array(
                        'titre' => $this->input->post('titre'),
                        'libelle_url' => $this->slug->slugify($this->input->post('titre')),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'thumbnail' => $filename,
                        'resume' => $this->input->post('resume'),
                        'date_modification' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type'),
                        'format' => $this->input->post('format'),
                        'status' => $this->input->post('status'),
                        'content' => $this->input->post('contenu')

                    );
                } elseif ($this->input->post('id_type') == 2) { //Quand il s'agit d'une page
                    $dataInsert = array(
                        'titre' => $this->input->post('titre'),
                        'libelle_url' => $this->slug->slugify($this->input->post('titre')),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'thumbnail' => $filename,
                        'resume' => $this->input->post('resume'),
                        'date_creation' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type'),
                        'content' => $this->input->post('contenu')
                    );
                }
                $ajoutArticlie = $this->General_model->AjoutDonnesEnBase($dataInsert, $this->tableArticle);
                if (!empty($ajoutArticlie) && $this->input->post('stations') !== null) {
                    foreach ($this->input->post('stations') as $val) {
                        $dataAssociation = array('id_station' => $val, 'id_article' => $ajoutArticlie);
                        $this->General_model->AjoutDonnesEnBase($dataAssociation, $this->tableAssociation);
                    }
                }
                $this->session->set_flashdata('success', ENREGISTREMENT);
                if ($url == "ajout-actualite") {
                    redirect('admin-uprad/actualite');
                } elseif ($url == "ajout-page") {
                    redirect('admin-uprad/page');
                }
            }
        }
        if ($url == "ajout-actualite") {
            $data['title'] = 'actualité';
            $this->layout->view('bo/accueil/ajout-actualite', $data);
        } elseif ($url == "ajout-page") {
            $data['title'] = 'page';
            $this->layout->view('bo/accueil/ajout-page', $data);
        }
    }

    /**
     * cette méthode traite la modification d'une actualité ou page
     * @param int $_idarticle // cette identifiant peut etre nul pendant la soumission du formulaire
     * 
     * */
    public function updateArticle($_idarticle = null)
    {
        $url = $this->uri->segment(2); //permet de savoir si c'est une page ou actualité

        //affichage des donnés dans le formulaire
        $data['title'] = "modifier un article";
        if (is_numeric($_idarticle) && !empty($_idarticle)) {
            if ($url == "update-actualite") {
                $data['stations'] = $this->General_model->Touslesstations();
                $data['editerStation'] = $this->General_model->StationsLies($_idarticle);
            }
            $data['editer'] = $this->General_model->AfficherUneDonnes($_idarticle, $this->tableArticle);
        }
        //après soumission du fomualire
        if ($this->input->post()) {
            $this->form_validation->set_rules('titre', 'titre', 'trim|required');
            $this->form_validation->set_rules('contenu', 'contenu', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $filename = "";
                if ($_FILES['fichier']['name']) {
                    $config['upload_path'] = './assets/img/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png|svg|doc|docx|pdf';
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
                if ($this->input->post('id_type') == 1) { //Quand il s'agit d'un article
                    $dataUpdate = array(
                        'titre' => $this->input->post('titre'),
                        'libelle_url' => $this->slug->slugify($this->input->post('titre')),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'resume' => $this->input->post('resume'),
                        'date_creation' => date("Y-m-d H:i:s"),
                        'article_type_id' => $this->input->post('id_type'),
                        'format' => $this->input->post('format'),
                        'status' => $this->input->post('status'),
                        'content' => $this->input->post('contenu')

                    );
                } elseif ($this->input->post('id_type') == 2) { //Quand il s'agit d'une page
                    $dataUpdate = array(
                        'titre' => $this->input->post('titre'),
                        'libelle_url' => $this->slug->slugify($this->input->post('titre')),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'resume' => $this->input->post('resume'),
                        'date_creation' => date("Y-m-d H:i:s"),
                        'article_type_id' => $this->input->post('id_type'),
                        'content' => $this->input->post('contenu')
                    );
                }
                if (!empty($filename)) { //On verifie s'il y a une photo on écrase l'ancien sinon on fait rien
                    $dataUpdate['thumbnail'] = $filename;
                }
                $this->General_model->ModifierDonnesEnBase($this->input->post('id'), $dataUpdate, $this->tableArticle);
                //en cas de modification des stations
                if ($this->input->post('id') && $this->input->post('stations') !== null) {
                    //on supprime l'existant et on rajoute des nouveau
                    $this->General_model->EnleverDesStation($this->input->post('idStations'));

                    foreach ($this->input->post('stations') as $val) {
                        $dataAssociation = array('id_station' => $val, 'id_article' => $this->input->post('id'));
                        $this->General_model->AjoutDonnesEnBase($dataAssociation, $this->tableAssociation);
                    }
                }
                $this->session->set_flashdata('success', MODIFICATION);
                if ($url == "update-actualite") {
                    redirect('admin-uprad/' . $url . '/' . $this->input->post('id'));
                } elseif ($url == "update-page") {
                    redirect('admin-uprad/' . $url . '/' . $this->input->post('id'));
                }
            }
        } else {
            if ($url == "update-actualite") {
                $data['title'] = 'modofier une actualité';
                $this->layout->view('bo/accueil/ajout-actualite', $data);
            } elseif ($url == "update-page") {
                $data['title'] = 'modifier une page';
                $this->layout->view('bo/accueil/ajout-page', $data);
            }
        }
    }

    /**
     * cette méthode traite la suppression d'un article
     *
     * @param integer $_idarticle
     */
    public function deleteArticle($_idarticle)
    {
        $url = $this->uri->segment(2); //cela nous permet de recupere l'url afin de savoir si c'est article ou page

        if (!empty($_idarticle) && is_numeric($_idarticle)) {
            if ($url == 'delete-actualite') {
                $this->General_model->SupprimerLesDonnes($_idarticle, $this->tableArticle, 1);
            } elseif ($url == 'delete-page') {
                $this->General_model->SupprimerLesDonnes($_idarticle, $this->tableArticle, 2);
            }
            $this->session->set_flashdata('success', SUPPRESSION);
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }


    /******************** Gestion de salon des idées************************ */

    /**
     * cette méthode traie l'affichage des salons des idées
     */
    public function getIdees()
    {
        $url = $this->uri->segment(2);
        switch ($url) {
            case 'tous-idees':
                $data['salons'] = $this->General_model->AfficherDesDonnes($this->tableSalon);
                break;
            case 'attente-idees':
                $data['salons'] = $this->General_model->AfficherDesDonnes($this->tableSalon, 0);
                break;
            case 'retenues-idees':
                $data['salons'] = $this->General_model->AfficherDesDonnes($this->tableSalon, 1);
                break;
        }
        $data['title'] = "Salon des idées";
        $this->layout->view('bo/accueil/salon-idee', $data);
    }
    /**
     * cette méthode traite la modification ou validation d'idée
     * @param integer $_idIdee
     *
     */
    public function updateIdees($_idIdee = null)
    {
        $data['title'] = 'Modifier une idée';
        if (!empty($_idIdee) && is_numeric($_idIdee)) {
            $data['editer'] = $this->General_model->AfficherUneDonnes($_idIdee, $this->tableSalon);
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('contenu', 'contenu', 'trim|required');
            $this->form_validation->set_rules('nom', 'nom', 'trim|required');
            $this->form_validation->set_rules('prenom', 'prenom', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|valid_email|required');
            $this->form_validation->set_rules('sujet', 'sujet', 'trim|required');


            if ($this->form_validation->run() == true) {

                $dataUpdate = array(
                    'civilite' => $this->input->post('civilite'),
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'typeidee' => $this->input->post('typeidee'),
                    'etat' => $this->input->post('etat'),
                    'sujet' => $this->input->post('sujet'),
                    'contenu' => $this->input->post('contenu')
                );
                $this->General_model->ModifierDonnesEnBase($this->input->post('id'), $dataUpdate, $this->tableSalon);
                $this->session->set_flashdata('success', ENREGISTREMENT);
                redirect('admin-uprad/tous-idees');
            }
        }
        $this->layout->view('bo/accueil/ajout-salon', $data);
    }

    /********************gestion evenement agendan****************** */

    /**
     * cette méthode traite l'affichage de tous les evenements
     */
    public function getEvenement()
    {
        $data['title'] = 'Agenda événements';
        $url = $this->uri->segment(2);
        switch ($url) {
            case 'evenement':
                $data['events'] = $this->General_model->AfficherDesDonnes($this->tableEvent);
                break;
            case 'evenement-attente':
                $data['events'] = $this->General_model->AfficherDesDonnes($this->tableEvent, 0);
                break;
        }

        $this->layout->view('bo/accueil/evenement', $data);
    }

    /**
     * cette méthode permet d'ajouter un evenement
     */
    public function addEvenement()
    {
        $data['title'] = 'Ajouter un evenement';
        if ($this->input->post()) {
            $this->form_validation->set_rules('titre', 'titre', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('description', 'description', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('dateDebut', 'date début', 'trim|required');
            $this->form_validation->set_rules('dateFin', 'date fin', 'trim|required');
            $this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
            if ($this->form_validation->run() == true) {
                $dataInsert = array(
                    'titre' => $this->input->post('titre'),
                    'description' => $this->input->post('description'),
                    'dateDebut' => $this->input->post('dateDebut'),
                    'dateFin' => $this->input->post('dateFin'),
                    'adresse' => $this->input->post('adresse'),
                    'cp' => $this->input->post('cp'),
                    'ville' => $this->input->post('ville'),
                    'typeEvenement' => $this->input->post('typeEvenement'),
                    'etat' => $this->input->post('status'),
                    'Organisateur' => $this->input->post('Organisateur'),
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone')
                );
                $this->General_model->AjoutDonnesEnBase($dataInsert, $this->tableEvent);
                $this->session->set_flashdata('success', ENREGISTREMENT);
                redirect('admin-uprad/evenement');
            }
        }
        $this->layout->view('bo/accueil/ajout-evenement', $data);
    }

    /**
     * cette méthode traite les modifications des données evenements
     * @param integer $_idEvent
     */
    public function updateEvenement($_idEvent = null)
    {
        $data['title'] = 'Modifier un événement';
        if (!empty($_idEvent) && is_numeric($_idEvent)) {
            $data['editer'] = $this->General_model->AfficherUneDonnes($_idEvent, $this->tableEvent);
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('titre', 'titre', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('description', 'description', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('dateDebut', 'date début', 'trim|required');
            $this->form_validation->set_rules('dateFin', 'date fin', 'trim|required');
            $this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('prenom', 'prenom', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
            if ($this->form_validation->run() == true) {
                $dataUpdate = array(
                    'titre' => $this->input->post('titre'),
                    'description' => $this->input->post('description'),
                    'dateDebut' => $this->input->post('dateDebut'),
                    'dateFin' => $this->input->post('dateFin'),
                    'adresse' => $this->input->post('adresse'),
                    'cp' => $this->input->post('cp'),
                    'ville' => $this->input->post('ville'),
                    'typeEvenement' => $this->input->post('typeEvenement'),
                    'etat' => $this->input->post('status'),
                    'Organisateur' => $this->input->post('Organisateur'),
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone')
                );
                $this->General_model->ModifierDonnesEnBase($this->input->post('id'), $dataUpdate, $this->tableEvent);
                $this->session->set_flashdata('success', ENREGISTREMENT);
                redirect('admin-uprad/evenement');
            }
        }
        $this->layout->view('bo/accueil/ajout-evenement', $data);
    }
}
