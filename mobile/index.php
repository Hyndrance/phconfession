<?php
session_start();
include_once("../config/database.php");
include_once("../config/Models.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {

	case 'confess' :
		$json = "";
		break;

	default :
		$json 	= 'getAll.php';
}

require_once $json;

?>
