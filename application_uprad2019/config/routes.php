<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'accueil';

/****************Front office du site ******************************/
$route['mouvement-uprad'] = 'accueil/apropos';
$route['agenda-evenement'] = 'accueil/getEvenement';
$route['proposer-evenement'] = 'accueil/addEvenement';
$route['adhesion'] = 'accueil/addAdhesion';
$route['actualites'] = 'accueil/getActualites';

/******************** Backoffice du site**************************/

$route['admin-uprad'] = "bo/adminaccueil";
//categorie
$route['admin-uprad/categorie'] = 'bo/adminaccueil/getCategorie';
$route['admin-uprad/ajout-categorie'] = 'bo/adminaccueil/addCategorie';
$route['admin-uprad/update-categorie'] = 'bo/adminaccueil/updateCategorie';
$route['admin-uprad/update-categorie/(:any)'] = 'bo/adminaccueil/updateCategorie/$1';
$route['admin-uprad/delete-categorie/(:any)'] = 'bo/adminaccueil/deleteCategorie/$1';
//actualité et pasge
$route['admin-uprad/actualite'] = 'bo/adminaccueil/getActualite';
$route['admin-uprad/page'] = 'bo/adminaccueil/getPage';
$route['admin-uprad/ajout-actualite'] = 'bo/adminaccueil/addActualite';
$route['admin-uprad/ajout-page'] = 'bo/adminaccueil/addActualite';
$route['admin-uprad/update-page'] = 'bo/adminaccueil/updateActualite';
//route pour les modifications des actulaités et pages
$route['admin-uprad/update-actualite'] = 'bo/adminaccueil/updateArticle';
$route['admin-uprad/update-page']      = 'bo/adminaccueil/updateArticle';
$route['admin-uprad/update-actualite/(:any)'] = 'bo/adminaccueil/updateArticle/$1';
$route['admin-uprad/update-page/(:any)'] = 'bo/adminaccueil/updateArticle/$1';

//suppression des données
$route['admin-uprad/delete-actualite/(:any)'] = 'bo/adminaccueil/deleteArticle/$1';
$route['admin-uprad/delete-page/(:any)'] = 'bo/adminaccueil/deleteArticle/$1';

//membre
$route['admin-uprad/adherant'] = 'compte/getAdherant';
$route['admin-uprad/adherant/(:any)'] = 'compte/getAdherant/$1';
$route['admin-uprad/ajout-adherant'] = 'compte/addAdherant';
$route['admin-uprad/update-adherant'] = 'compte/updateAdherant';
$route['admin-uprad/update-adherant/(:any)'] = 'compte/updateAdherant/$1';
$route['admin-uprad/delete-adherant/(:any)'] = 'compte/deleteAdherant/$1';

//Equipe
$route['admin-uprad/equipe'] = 'compte/getEquipe';
$route['admin-uprad/adherant-equipe'] = 'compte/getConvEquipe';
$route['admin-uprad/update-equipe'] = 'compte/updateEquipe';
$route['admin-uprad/update-equipe/(:any)'] = 'compte/updateEquipe/$1';
$route['admin-uprad/modifier-equipe'] = 'compte/modifierEquipe';
$route['admin-uprad/modifier-equipe/(:any)'] = 'compte/modifierEquipe/$1';
$route['admin-uprad/delete-equipe/(:any)'] = 'compte/deleteEquipe/$1';

//deconnexion
$route['deconnexion'] = 'compte/logout';

//salon des idées
$route['admin-uprad/tous-idees'] = 'bo/adminaccueil/getIdees';
$route['admin-uprad/attente-idees'] = 'bo/adminaccueil/getIdees';
$route['admin-uprad/retenues-idees'] = 'bo/adminaccueil/getIdees';

$route['admin-uprad/update-salon'] = 'bo/adminaccueil/updateIdees';
$route['admin-uprad/update-salon/(:any)'] = 'bo/adminaccueil/updateIdees/$1';

//Evenementiels
$route['admin-uprad/evenement'] = 'bo/adminaccueil/getEvenement';
$route['admin-uprad/evenement-attente'] = 'bo/adminaccueil/getEvenement';
$route['admin-uprad/ajout-evenement'] = 'bo/adminaccueil/addEvenement';
$route['admin-uprad/update-evenement'] = 'bo/adminaccueil/updateEvenement';
$route['admin-uprad/update-evenement/(:any)'] = 'bo/adminaccueil/updateEvenement/$1';
$route['admin-uprad/delete-evenement/(:any)'] = 'bo/adminaccueil/deleteEvenement/$1';
//Témoigngage
$route['admin-uprad/temoignage'] = 'bo/adminaccueil/getTemoignage';
$route['admin-uprad/ajout-temoignage'] = 'bo/adminaccueil/addTemoignage';
$route['admin-uprad/update-temoignage'] = 'bo/adminaccueil/updateTemoignage';
$route['admin-uprad/update-temoignage/(:any)'] = 'bo/adminaccueil/updateTemoignage/$1';
$route['admin-uprad/delete-temoignage/(:any)'] = 'bo/adminaccueil/getTemoignage/$1';

//Galerie
$route['admin-uprad/galerie'] = 'bo/adminaccueil/getGalerie';
$route['admin-uprad/ajout-galerie'] = 'bo/adminaccueil/addGalerie';
$route['admin-uprad/update-galerie'] = 'bo/adminaccueil/updateGalerie';
$route['admin-uprad/update-galerie/(:any)'] = 'bo/adminaccueil/updateGalerie/$1';
$route['admin-uprad/delete-galerie/(:any)'] = 'bo/adminaccueil/deleteGalerie/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
