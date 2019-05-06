<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminaccueil extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setTheme('backoffice');
    }

    /**
     * Cette méthode traite l'affichage de la home page
     *
     * @return array|bool
     */
    public function index()
    {
        $this->layout->view('admin/accueil/accueil');
    }
}
