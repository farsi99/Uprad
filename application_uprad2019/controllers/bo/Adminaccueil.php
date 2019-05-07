<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminaccueil extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setTheme('backoffice');
        $this->load->model('Article_model');
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
            $data['actualites'] = $this->Article_model->Touslesactualites($_idstation);
        } else {
            $data['actualites'] = $this->Article_model->Touslesactualites();
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
        $data = array();
        $this->layout->view('bo/accueil/ajout-actualite', $data);
    }
}
