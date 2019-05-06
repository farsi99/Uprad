<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout{
	
	private $CI;
	private $var = array();
	private $theme = 'default'; // theme par defaut
	private $currentStation = 0;
	
	/**
	 * constructeur du layout
	 */
	public function __construct(){
		$this->CI = get_instance();
		
		$this->var['output'] = '';
		
		//  Le titre est composé du nom de la méthode et du nom du controleur
		//  La fonction ucfirst permet d'ajouter une majuscule
		$this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
		$this->var['description'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
		$this->var['meta'] = "";
		
		//  Nous initialisons la variable $charset avec la m�me valeur que la cl� de configuration initialis�e dans le fichier config.php
		$this->var['charset'] = $this->CI->config->item('charset');

		$this->var['currentBoPart'] = "A1";
		
		$this->var['css'] = array();
		$this->var['js'] = array();
	}

	public function view($name, $data = array()){
	   if($this->theme == "default"){
	   	 $this->var['header'] = $this->getHeader();
	  	 $this->var['footer'] = $this->getFooter();
	   }else if($this->theme == "backoffice"){
	   	$this->var['headerBO'] = $this->getHeaderBo();
	   	$this->var['footerBO'] = $this->getFooterBo();
	   }else if($this->theme == "Connexion"){
	   	$this->var['footer'] = $this->getFooter();
	   }

		
       $this->var['output'] .= $this->CI->load->view($name, $data, true);
       $this->CI->load->view('../themes/'.$this->theme, $this->var);
	}
	 
	public function views($name, $data = array()){
	    $this->var['output'] .= $this->CI->load->view($name, $data, true);
        return $this;
	}
	
	/**
	 * permet de setter le titre de la page
	 * @param unknown_type $titre
	 * @return boolean
	 */
	public function setTitre($titre){
		if(is_string($titre) AND !empty($titre)){
			$this->var['titre'] = $titre;
			return true;
		}
		return false;
	}
	
	public function setCurrentStation($_currentStationId){
		if(is_numeric($_currentStationId) AND !empty($_currentStationId)){
			$this->currentStation = $_currentStationId;
			return true;
		}
		return false;
	}
	
	public function getCurrentStation(){
		if(!empty($this->currentStation)){
			return $this->currentStation;
		}
	}
	
	/**
	 * permet de setter la description de la page
	 * @param unknown_type $description
	 * @return boolean
	 */
	public function setDescription($description){
		if(is_string($description) AND !empty($description)){
			$this->var['description'] = $description;
			return true;
		}
		return false;
	}
	
	/**
	 * permet de setter les meta de la page
	 * @param unknown_type $meta(s)
	 * @return boolean
	 */
	public function setMeta($meta){
		if(is_string($meta) AND !empty($meta)){
			$this->var['meta'] = $meta;
			return true;
		}
		return false;
	}
	
	/**
	 * permet de setter la patie du menu active pour le BO
	 * @param unknown_type $currentPart
	 * @return boolean
	 */
	public function setCurrentBoPart($currentPart){
		if(!empty($currentPart)){
			$this->var['currentBoPart'] = $currentPart;
			return true;
		}
		return false;
	}
	
	/**
	 * permet de modifier l'encodage de la page 
	 * @param unknown_type $charset
	 * @return boolean
	 */
	public function setCharset($charset){
		if(is_string($charset) AND !empty($charset)){
			$this->var['charset'] = $charset;
			return true;
		}
		return false;
	}
	
	/**
	 * permet de charger des fichiers css
	 * @param unknown_type $nom
	 * @return boolean
	 */
	public function addCss($nom){
		if(is_string($nom) AND !empty($nom) AND file_exists('./assets/css/' . $nom . '.css')){
			$this->var['css'][] = css_url($nom);
			return true;
		}
		return false;
	}
	
	/**
	 * permet de charger des fichiers javascript
	 * @param unknown_type $nom
	 * @return boolean
	 */
	public function addJs($nom){
		if(is_string($nom) AND !empty($nom) AND file_exists('./assets/js/' . $nom . '.js')){
			$this->var['js'][] = js_url($nom);
			return true;
		}
		return false;
	}

	/**
	 * permet de changer facilement le theme de la page si besoin
	 * @param unknown_type $theme
	 * @return boolean
	 */
	public function setTheme($theme){ 
		$this->theme = $theme;
		return true;
	}
	
	/**
	 * permet de charger et d'afficher le header
	 */
	private function getHeader(){
		$data = array(); 
		return $this->CI->load->view("inc/header", $data, true);
	}
	
	/**
	 * permet de charger et d'afficher le footer
	 */
	private function getFooter(){
		$data = array();
		return $this->CI->load->view("inc/footer", $data, true);
	}
	
	/**
	 * permet de charger et d'afficher le header du BO
	 */
	private function getHeaderBo(){
		$data = array();
		$data['currentBoPart'] = $this->var['currentBoPart'] ;
		return $this->CI->load->view("inc/header-bo", $data, true);
	}
	
	/**
	 * permet de charger et d'afficher le footer du BO
	 */
	private function getFooterBo(){
		$data = array();
		return $this->CI->load->view("inc/footer-bo", $data, true);
	}
		
	/**
	 * permet de charger et d'afficher le header du Salon
	 */
	private function getHeaderSalon(){
		$data = array();
		$data['currentBoPart'] = $this->var['currentBoPart'] ;
		return $this->CI->load->view("inc/header-salon", $data, true);
	}
	
	/**
	 * permet de charger et d'afficher le footer du Salon
	 */
	private function getFooterSalon(){
		$data = array();
		return $this->CI->load->view("inc/footer-salon", $data, true);
	}
	
	
	/**
	 * Permet de setter la page courante
	 * @param string $currentPage
	 * @return boolean
	 */
	public function setCurrentPage($currentPage){
		if(!empty($currentPage)){
			$this->var['currentPage'] = $currentPage;
			return true;
		}
		return false;
	}
	
	
	/**
	 * Récupère la page courante
	 */
	public function getCurrentPage(){
		if(!empty($this->var['currentPage'])){
			return $this->var['currentPage'];
		}
	}
	
	
	/**
	 * Permet de setter l'organisation pour marque blanche
	 * @param string $currentPage
	 * @return boolean
	 */
	public function setOrgaMB($orgaMB){
		if(!empty($orgaMB)){
			$this->var['orgaMB'] = $orgaMB;
			return true;
		}
		return false;
	}
	
	
	/**
	 * Récupère l'organisation pour marque blanche
	 */
	public function getOrgaMB(){
		if(!empty($this->var['orgaMB'])){
			return $this->var['orgaMB'];
		}
	}
	
}

