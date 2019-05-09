<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminaccueil extends MY_Controller
{

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
            $data['actualites'] = $this->General_model->Touslesactualites($_idstation);
        } else {
            $data['actualites'] = $this->General_model->Touslesactualites();
        }
        $this->layout->view('bo/accueil/actualites', $data);
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
                } elseif ($this->input->psot('id_type') == 2) { //Quand il s'agit d'une page
                    $dataInsert = array(
                        'titre' => $this->input->post('titre'),
                        'meta_title' => $this->input->post('meta-title'),
                        'meta_description' => $this->input->post('meta-description'),
                        'thumbnail' => $filename,
                        'resume' => $this->input->psot('resume'),
                        'date_creation' => $this->input->post('date-publication'),
                        'article_type_id' => $this->input->post('id_type')
                    );
                }
            }
            $ajoutArticlie = $this->General_model->AjoutDonnesEnBase($dataInsert);
            if (!empty($ajoutArticlie) && $this->input->post('stations') !== null) {
                foreach ($this->input->post('stations') as $val) {
                    $dataAssociation = array('id_station' => $val, 'id_article' => $ajoutArticlie);
                    $this->General_model->AjoutDonnesEnBase($dataAssociation, 'ass-station-article');
                }
            }
            $this->session->set_flashdata('success', ENREGISTREMENT);
            redirect('admin-uprad/actualite');
        }
        $this->layout->view('bo/accueil/ajout-actualite', $data);
    }
}
