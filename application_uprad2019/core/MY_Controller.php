<?php

#set_error_handler('MY_Controller::phpErrorCatcher',E_ALL);  

class MY_Controller extends CI_Controller
{

	public $AEF_CONFIG = "";
	public $polesAndDomaines = Null;

	public function __construct()
	{
		$session_id = session_id();
		parent::__construct();
		$this->getAefConfig();
		$json_cookie = get_cookie($this->AEF_CONFIG['connexion_cookie_name']);
		$cookie = json_decode($json_cookie, true);
	}

	private function checkUserDatas()
	{
		$this->getDroits();
	}



	private function disconnectUser()
	{
		$this->session->sess_destroy();
		$this->deleteConnexionCookie();
	}

	/* SUPPRESSION DU COOKIE DE CONNEXION AUTOMATIQUE */
	public function deleteConnexionCookie()
	{
		$cookie_name = $this->AEF_CONFIG['connexion_cookie_name'];
		delete_cookie($cookie_name);
	}

	/* erreur php catcher */
	public function phpErrorCatcher($errno, $errstr, $errfile, $errline)
	{
		return false;
	}

	private function showAuthBox()
	{
		header('WWW-Authenticate: Basic realm="Test Authentication System"');
		header('HTTP/1.0 401 Unauthorized');
		exit;
	}

	protected function checkAuthPHP()
	{
		if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
			$this->showAuthBox();
		} else {
			if (!$this->authIsOK()) {
				$this->showAuthBox();
			}
		}
	}

	private function authIsOK()
	{
		if ($this->AEF_CONFIG['bo_login'] == $_SERVER['PHP_AUTH_USER'] && $this->AEF_CONFIG['bo_password'] == $_SERVER['PHP_AUTH_PW']) {
			return true;
		} else {
			return false;
		}
	}

	public function getAefConfig()
	{
		$this->AEF_CONFIG = $this->config->item('AEF');
	}

	public function checkPoleAdminrights($PoleId)
	{
		$authAdmin = false;
		$auth = !empty($this->session->userdata['auth']) ? $this->session->userdata['auth'] : Null;
		if (!empty($auth)) {
			if (isset($auth[$PoleId])) {
				$abonne_id = $this->session->userdata['id'];
				$this->load->model('bo/BoAefAdmin_model');
				$authAdmin = $this->BoAefAdmin_model->checkIfIspoleAdmin($abonne_id, $PoleId);
			}
		}
		if (!$authAdmin) {
			header('Location: ' . base_url('accueil/page401'));
			exit;
		}
	}

	public function checkSectionAdminrights($sectionId)
	{
		$authAdmin = false;
		$auth = !empty($this->session->userdata['auth']) ? $this->session->userdata['auth'] : Null;
		if (!empty($auth)) {
			$abonne_id = $this->session->userdata['id'];
			$this->load->model('bo/BoAefAdmin_model');
			$authAdmin = $this->BoAefAdmin_model->checkIfIsSectionAdmin($abonne_id, $sectionId);
		}
		if (!$authAdmin) {
			header('Location: ' . base_url('accueil/page401'));
			exit;
		}
	}

	public function hasAdminrights($sectionId)
	{
		$authAdmin = false;
		$auth = !empty($this->session->userdata['auth']) ? $this->session->userdata['auth'] : Null;
		if (!empty($auth)) {
			$abonne_id = $this->session->userdata['id'];
			$this->load->model('bo/BoAefAdmin_model');
			$authAdmin = $this->BoAefAdmin_model->checkIfIsSectionAdmin($abonne_id, $sectionId);
		}
		return $authAdmin;
	}



	public function getAdmProfil()
	{
		if (!empty($this->session->userdata['adminProfil'])) {
			return $this->session->userdata['adminProfil'];
		}
		return "";
	}

	/**
	 * Cette méthode gere les droits d'accès à une dépêche
	 */
	public function setDefaultDatas($_libelleRoutePole = null, $_libelleRouteDomaine = null, $_tags = null, $_idDepeche = null)
	{
		$this->load->model('PoleEtdomaine_model');
		$this->load->helper('general');
		$auth = !empty($this->session->userdata['auth']) ? $this->session->userdata['auth'] : Null;
		$id_pole = $this->PoleEtdomaine_model->choosePoleId($_libelleRoutePole);
		if (empty($_libelleRouteDomaine)) {
			$this->gestionAcces($id_pole, Null, $auth, $_tags, $_idDepeche);
		} else {
			$id_domaine = $this->PoleEtdomaine_model->getDomaineIds($_libelleRouteDomaine);
			$this->gestionAcces($id_pole, $id_domaine, $auth, $_tags, $_idDepeche);
		}
	}

	/**
	 * Gère l'accès aux parties du site demandée. 
	 * @param int 		$_idPole				ID du pole en cours (pour les homes pole)
	 * @param int 		$_idsDomaine				ID du domaine en cours
	 * @param array 	$_auth					Autorisations de l'utilisateurs, FORME (array)pole=>(array)domaines
	 */
	public function gestionAcces($_idPole = Null, $_idsDomaine = Null, $_auth = Null, $_tags = null, $_idDepeche = Null)
	{
		if (!$this->getDroits($_idPole, $_idsDomaine, $_auth, $_tags)) {
			/* show_error('Vous n\'&ecirc;tes pas autoris&eacute; &agrave; acc&eacute;der &agrave; ce contenu.', $status_code = 403); */
			$this->session->userdata['requested_url'] = $_SERVER['REQUEST_URI'];
			if (!empty($_idDepeche)) {
				redirect('acces-depeche/' . $_idDepeche);
			} else {
				if (empty($this->session->userdata['logged_in'])) {
					$url = site_url('accueil/accessLogin');
				} else {
					$url = site_url('accueil/page401');
				}
			}

			header('Location:' . $url);
			exit();
		}
	}

	public function getDomainesListFromAuth($pAuth)
	{
		if (empty($pAuth)) return Null;
		$domaines = array();
		foreach ($pAuth as $pole => $domaine) {
			for ($i = 0; $i < count($domaine); $i++) {
				array_push($domaines, (int)$domaine[$i]);
			}
		}
		return $domaines;
	}


	/* REDIRECTIONS EN FONCTION DE L'UTILISATEUR CONNECTE OU NON */
	public function poleUrl($pIdPole)
	{
		$opened_pole = $this->AEF_CONFIG['opened_poles'][$pIdPole];
		if (!$opened_pole['opened']) {
			$returnUrl = base_url('/acces-protege/closed/' . $pIdPole);
		} else {
			if (!isset($_SESSION['polesAndDomaines'][$pIdPole])) return '#';
			$auth = !empty($this->session->userdata['auth']) ? $this->session->userdata['auth'] : Null;
			$returnUrl = base_url("") . $_SESSION['polesAndDomaines'][$pIdPole]['libelle_route'];
			if (!empty($auth)) {
				$allowed = $this->getDroits($pIdPole, Null, $auth);
				if ($allowed) $returnUrl =  base_url("abonne/alaune") . "/" . $_SESSION['polesAndDomaines'][$pIdPole]['libelle_route'];
			}
		}
		return $returnUrl;
	}



	/* REDIRECTION POUR LES BOUQUETS */
	public function bouquetUrl()
	{
		// Si utilisateur est connecté
		$returnUrl = site_url('bouquets-aef');
		if (isset($this->session->userdata['logged_in']) && $this->session->userdata['logged_in'] == true) {
			$authTag = !empty($this->session->userdata['authTag']) ? $this->session->userdata['authTag'] : Null;
			if (!empty($authTag)) {
				$returnUrl = site_url('abonne/bouquet');
			}
		}
		return $returnUrl;
	}

	/* GESTION DES DROITS UtiLISATEURS */
	public function getDroits($_idPole = Null, $_idsDomaine = Null, $_auth = Null, $_tags = Null)
	{
		$this->load->model('Compte_model');
		if (empty($_auth)) {
			// LECTURE DU COOKIE DE CONNEXION AUTOMATIQUE
			$json_cookie = get_cookie($this->AEF_CONFIG['connexion_cookie_name']);
			if (!empty($json_cookie)) {
				$cookie = json_decode($json_cookie, true);
				$userOk = $this->Compte_model->AuthetificationAvecCookie(substr($cookie['ID'], 0, -15));
				if ($userOk == true) {
					$_auth = $this->session->userdata['auth'];
				}
			} else {
				// VERIFICATION SI IP AUTORISEE A NAVIGUER SANS IDENTIFICATION
				if (!isset($_SESSION['dont_check_organisation_ip'])) {
					$this->load->model('bo/BoOrganisation_model');
					//$organisation_datas = $this->BoOrganisation_model->getAllowedDomaines($_SERVER['REMOTE_ADDR']);
					$organisation_datas = $this->Compte_model->AuthentificationParIp();
					if ($organisation_datas == TRUE) {
						// On gere l'acces par IP 
						$json_cookie = get_cookie($this->AEF_CONFIG['acces_ip_form_name']);

						$_auth = $this->session->userdata['auth'];
					}
				}
			}
		}

		if (empty($this->session->userdata['logged_in'])) return false;
		//if(($this->session->userdata['statutCompte']) == 7) return true;	!!! TODO
		if (empty($_idsDomaine) && !empty($_idPole)) {
			if (isset($_auth[$_idPole])) return true;
		} elseif (empty($_idsDomaine) && empty($_idPole)) {
			// gestion abonné seulement aux tags
			// attention gere aussi redirect vers mon aef  si abonne a des domaines + tags
			if (empty($this->session->userdata['auth']) && !empty($this->session->userdata['authTag'])) {
				$_authTag = $this->session->userdata['authTag'];
				if (isset($_authTag)) {
					$tagsList = "," . $_tags . ",";
					foreach ($_authTag as $tag) {
						if (strpos($tagsList, "," . $tag->tag_id . ",") !== FALSE) {
							return true;
						}
					}
					return false;
				}
			}

			if (!empty($this->session->userdata['logged_in'])) return true;
		} elseif (!empty($_idsDomaine) && !empty($_idPole)) {
			if (isset($_auth[$_idPole])) {
				$domaineAuth = array();
				foreach ($_auth as $pole => $tabDomaine) {
					foreach ($tabDomaine as $domTab) {
						array_push($domaineAuth, $domTab);
					}
				}
				$listeDomaines = explode(',', $_idsDomaine);
				$intersect = array_intersect($listeDomaines, $domaineAuth);
				if (is_array($intersect) && count($intersect) > 0) return true;
			}
		}
		if (isset($_auth)) {
			foreach ($_auth as $poles) {
				foreach ($poles as $domaines) {
					$doms[] = $domaines;
				}
			}
			$listeTag = explode(',', $_tags);
			$intersection = array_intersect($listeTag, $doms);
			if (is_array($intersection) && count($intersection) > 0) return true;
		}

		if (!empty($this->session->userdata['authTag'])) {
			$_authTag = $this->session->userdata['authTag'];
			if (isset($_authTag)) {
				$tagsList = "," . $_tags . ",";
				foreach ($_authTag as $tag) {
					if ($tag->tag_id == 16590 || $tag->tag_id == 16591 || $tag->tag_id == 17004) { // les tags 16590 (NL_écoles) et 16591 (NL_universités) ne permettent pas d'accéder aux dépêches mais juste de recevoir une NL spéciale pour les abonnés aux domaines classiques.
						continue;
					}
					if (strpos($tagsList, "," . $tag->tag_id . ",") !== FALSE) {
						return true;
					}
				}
			}
		}

		return false;
	}

	/* PAGE/DOCUMENT NON TROUVE => MAIL ALERTE */
	function show404AndSendErrorMail($pServerDatas)
	{
		$subject = "Erreur 404 sur le site www.aef.info";
		$body  = "L'url suivante n'a pas pu &ecirc;tre consult&eacute;e :";
		$body .= "<br/>";
		$body .= "<strong>" . $pServerDatas['REQUEST_URI'] . "</strong>";
		$body .= "<br/>";
		$body .= "<br/>";
		$body .= "<strong>Informations serveur :</strong>";
		$body .= "<br/>";
		$infos_server = array(
			'HTTP_REFERER',
			'REMOTE_ADDR',
			'PHP_SELF'
		);
		for ($idx = 0; $idx < count($infos_server); $idx++) {
			$body .= '<strong>' . $infos_server[$idx] . "</strong> : " . (!empty($pServerDatas[$infos_server[$idx]]) ? $pServerDatas[$infos_server[$idx]] : '') . "<br/>";
		}
		$body .= "<br/>";
		$body .= "<strong>Informations utilisateur :</strong>";
		$body .= "<br/>";
		$infos_user = array(
			'session_id',
			'ip_address',
			'user_agent',
			'username',
			'logged_in',
			'statutCompte',
			'id'
		);
		for ($idx = 0; $idx < count($infos_user); $idx++) {
			if (!empty($this->session->userdata[$infos_user[$idx]])) {
				$body .= '<strong>' . $infos_user[$idx] . "</strong> : " . $this->session->userdata[$infos_user[$idx]] . "<br/>";
			}
		}
		$this->sendErrorMail($subject, $body);
		$this->layout->setTitre("Page non trouvée");
		$this->layout->addCss("page404");
		$this->layout->view('page404');
	}

	/* ENVOI DE MAIL D'ERREUR */
	function sendErrorMail($pSubject, $pBody)
	{
		$destinataire = $this->config->item('mail_admin');
		$this->load->library('email');
		$this->email->from('service.clients@aef.info', 'www.aef.info');
		$this->email->to($destinataire);
		$this->email->subject($pSubject);
		$this->email->message($pBody);
		$retval = $this->email->send();
		return $retval;
	}

	/*verficiation des rgpd pour un abonnée*/
	public function verfiRgpd()
	{
		$this->load->model('Compte_model');
		if (!empty($this->session->userdata['id'])) {
			$verifRgpd = $this->Compte_model->VerifRgpdAbonne(intval($this->session->userdata['id']), DATECOMPAR);
			$profile = $this->Compte_model->profilAbonne(intval($this->session->userdata['id']));
			if ($verifRgpd == false && $profile->NbreConnexion >= 3) {
				redirect('rgpd');
			}
		}
	}

	/* ENVOI MAIL TRAITEMENT */
	function sendReportMail($pLibelleTraitement, $pInfosTraitement)
	{
		$subject = $pLibelleTraitement . " - Traitement effectu&eacute; sur le site www.aef.info";
		$body  = "CR du traiement effectu&eacute; : ";
		$body .= $pInfosTraitement;
		$body .= "<br/>";
		$this->sendErrorMail($subject, $body);
	}
}
