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

	case 'add_relate' :
		add_relate();
		break;

	case 'contactUs' :
		contact_us();
		break;

	case 'register' :
		register();
		break;

	default :
}

function confess()
{

		$confession = confession();
		$confession->obj = $_POST;
		$confession->obj['alias'] = $_SESSION['alias_session'];
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

function add_relate()
{
	$Id=$_GET['id'];

	$relate = relate();
	$relate->obj['cId'] = $Id;
	$relate->obj['alias'] = $_SESSION['alias_session'];
	$relate->create();

}

function contact_us()
{
	$email=$_POST['email'];
	$message=$_POST['message'];
	$message = 'From: '.$email.', <br>'.$message;
	sendEmail('phconfession2018@gmail.com', $message);

	header('Location: index.php');

}

function register()
{
	$_SESSION['alias_session'] = $_POST['alias'];

	header('Location: index.php');

}


?>
