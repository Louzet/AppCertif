<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	My routes
*/

$route['default_controller'] = 'connexion';
//$route['(:any)'] = 'network/view/$1';
/* 	
	cette méthode me permettra de raccourcir mes URL'S
	blog représente mon controller
	view représente ma méthode qui se chargera de généré toutes les pages
	$1 est la variable qui renvoie toutes les vues vers 'index.php' grace au fichier '.htaccess
*/




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
