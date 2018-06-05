<?php
include_once("config/database.php");
include_once("config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'confess' :
		$content 	= 'pages/confess.php';
		$template	= 'include/template.php';
		break;

	case 'category' :
		$content 	= 'pages/category.php';
		$template	= 'include/template.php';
		break;

	case 'display' :
		$content 	= 'pages/display.php';
		$template	= 'include/template.php';
		break;

	default :
		$content 	= 'pages/home.php';
		$template	= 'include/template.php';
}

require_once $template;

?>
