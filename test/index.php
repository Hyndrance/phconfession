<?php
session_start();
include_once("../config/database.php");
include_once("../config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {


	case 'loadmore' :
		$title = "";
		$content 	= 'loadmore.php';
		$template	= 'template.php';
		break;


	default :
		$title = "";
		$content 	= 'testing.php';
		$template	= 'template.php';
}

require_once $template;

?>
