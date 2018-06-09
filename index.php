<?php
session_start();
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

	case 'contactUs' :
		$content 	= 'pages/contactUs.php';
		$template	= 'include/template.php';
		break;

	case 'login' :
		$content 	= 'pages/login.php';
		$template	= 'include/blank.php';
		break;

	case 'register' :
		$content 	= 'pages/register.php';
		$template	= 'include/blank.php';
		break;

	case 'trending' :
		$content 	= 'pages/trending.php';
		$template	= 'include/template.php';
		break;

	case 'fresh' :
		$content 	= 'pages/fresh.php';
		$template	= 'include/template.php';
		break;

	default :
		$content 	= 'pages/hot.php';
		$template	= 'include/template.php';
}

require_once $template;

?>
