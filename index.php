<?php
session_start();
include_once("config/database.php");
include_once("config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'confess' :
		$title = "";
		$content 	= 'pages/confess.php';
		$template	= 'include/template.php';
		break;

	case 'testing' :
		$title = "";
		$content 	= 'pages/testing.php';
		$template	= 'include/template.php';
		break;

	case 'category' :
		$title = "Category";
		$content 	= 'pages/category.php';
		$template	= 'include/template.php';
		break;

	case 'display' :
		$title = "";
		$content 	= 'pages/display.php';
		$template	= 'include/template.php';
		break;

	case 'contactUs' :
		$title = "Contact Us";
		$content 	= 'pages/contactUs.php';
		$template	= 'include/template.php';
		break;

	case 'about' :
		$title = "About PH Confession";
		$content 	= 'pages/about.php';
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
		$title = "Trending Confessions";
		$content 	= 'pages/trending.php';
		$template	= 'include/template.php';
		break;

	case 'latest' :
		$title = "Latest Confessions";
		$content 	= 'pages/latest.php';
		$template	= 'include/template.php';
		break;

	case 'myconfessions' :
		$title = "My Confessions";
		$content 	= 'pages/myconfessions.php';
		$template	= 'include/template.php';
		break;

	default :
		$title = "Hot Confessions";
		$content 	= 'pages/hot.php';
		$template	= 'include/template.php';
}

require_once $template;

?>
