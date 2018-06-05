<?php
session_start();
require_once 'config/database.php';
require_once 'config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'confess' :
		confess();
		break;

	case 'view' :
		view();
		break;

	case 'relate' :
		relate();
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

function view()
{
	$Id=$_GET['id'];

	$get = confession()->get("Id='$Id'");

	$confession = confession();
	$confession->obj['view'] = $get->view + 1;
	$confession->update("Id='$Id'");

	header('Location: index.php?view=display&id='.$Id);
}


function relate()
{
	$Id=$_GET['id'];

	$get = confession()->get("Id='$Id'");

	$confession = confession();
	$confession->obj['relate'] = $get->relate + 1;
	$confession->update("Id='$Id'");

}

?>
