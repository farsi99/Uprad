<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminaccueil extends MY_Controller
{
    private $tableArticle = 'article';
    private $tableAssociation = 'ass-station-article';

    public function __construct()
    {
        parent::__construct();
        $this->layout->setTheme('backoffice');
        $this->load->model('General_model');
    }

    /**
     * Cette méthode traite l'affichage de la home page
     *
     * @return array|bool
     */
    public function index()
    {
        $this->layout->view('bo/accueil/accueil');
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
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'thumbnail' => $filename,
                        'resume' => $this->input->post('resume'),
                        'date_creation' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type'),
                        'format' => $this->input->post('format'),
                        'status' => $this->input->post('status')

                    );
                } elseif ($this->input->post('id_type') == 2) { //Quand il s'agit d'une page
                    $dataInsert = array(
                        'titre' => $this->input->post('titre'),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'thumbnail' => $filename,
                        'resume' => $this->input->post('resume'),
                        'date_creation' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type')
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
                if ($this->uri->segment(2) == "ajout-actualite") {
                    redirect('admin-uprad/actualite');
                } elseif ($this->uri->segment(2) == "ajout-page") {
                    redirect('admin-uprad/page');
                }
            }
        }
        if ($this->uri->segment(2) == "ajout-actualite") {
            $data['title'] = 'actualité';
            $this->layout->view('bo/accueil/ajout-actualite', $data);
        } elseif ($this->uri->segment(2) == "ajout-page") {
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
        //si le formulaire n'est pas soumis
        $data['title'] = "modifier un article";
        if (is_numeric($_idarticle) && !empty($_idarticle)) {
            $data['editer'] = $this->General_model->AfficherUnArticle($_idarticle, $this->tableArticle);
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
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'resume' => $this->input->post('resume'),
                        'date_creation' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type'),
                        'format' => $this->input->post('format'),
                        'status' => $this->input->post('status')

                    );
                } elseif ($this->input->post('id_type') == 2) { //Quand il s'agit d'une page
                    $dataUpdate = array(
                        'titre' => $this->input->post('titre'),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'resume' => $this->input->post('resume'),
                        'date_creation' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type')
                    );
                }
                if (!empty($filename)) { //On verifie s'il y a une photo on écrase l'ancien sinon on fait rien
                    $dataUpdate['thumbnail'] = $filename;
                }
                $this->General_model->ModifierDonnesEnBase($this->input->post('id'), $dataUpdate, $this->tableArticle);
                /*en cas de modification des stations
                if ($this->input->post('id') && $this->input->post('stations') !== null) {
                    foreach ($this->input->post('stations') as $val) {
                        $dataAssociation = array('id_station' => $val, 'id_article' => $this->input->post('id'));
                        $this->General_model->ModifierDonnesEnBase($val, $dataAssociation, 'ass-station-article');
                    }
                }*/
                $this->session->set_flashdata('success', MODIFICATION);
                redirect('admin-uprad/update-actualite/' . $this->input->post('id'));
            }
        } else {
            $this->layout->view('bo/accueil/ajout-actualite', $data);
        }
    }

    /**
     * cette méthode traite la suppression d'un article
     *
     * @param integer $_idarticle
     */
    public function deleteArticle($_idarticle)
    {
        if (!empty($_idarticle) && is_numeric($_idarticle)) {
            $this->General_model->SupprimerLesDonnes($_idarticle, $this->tableArticle);
            $this->session->set_flashdata('success', SUPPRESSION);
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
}
