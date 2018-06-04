<?php
session_start();
require_once 'config/database.php';
require_once 'config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'confess' :
		confess();
		break;

	default :
}

function confess()
{

		$confession = confession();
		$confession->obj = $_POST;
		$confession->obj['datetime'] = 'NOW()';
		$confession->create();

		header('Location: index.php');

}

?>
