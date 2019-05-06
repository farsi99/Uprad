<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Cette méthode traite l'affichage de la home page
     *
     * @return array|bool
     */
    public function index()
    {
        $this->layout->view('accueil/accueil');
    }
}
