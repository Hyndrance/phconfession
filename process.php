<?php
session_start();
require_once 'config/database.php';
require_once 'config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'check_notification' :
		check_notification();
		break;

	case 'delete_notification' :
		delete_notification();
		break;

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

	case 'login' :
		login();
		break;

	case 'comment' :
		add_comment();
		break;

	case 'logout' :
		logout();
		break;

	case 'close_notif' :
		close_notif();
		break;

	default :
}

function login()
{
	// if we found an error save the error message in this variable

	$alias = $_POST['alias'];
	$password = $_POST['password'];

	//$result = user()->get("alias='$alias' and password = '".sha1($password)."'");
	$result = user()->get("alias='$alias' and password = '$password'");

	if ($result){
		$_SESSION['alias_session'] = $alias;
		$last_link = (isset($_SESSION['last_link']) && $_SESSION['last_link'] != '') ? $_SESSION['last_link'] : 'index.php';
		header('Location: '.$last_link);
	}
	else {
			header('Location: index.php?view=login&error=Username or password not matched!');
	}
}

function register()
{
	$alias = $_POST['alias'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$aliasExists = user()->get("alias='$alias'");

	if ($aliasExists){
		header('Location: index.php?view=register&error=Alias already exists');
	}
	else if ($password != $password2){
		header('Location: index.php?view=register&error=Password not matched');
	}
	else {
			$user = user();
			$user->obj['alias'] = $alias;
			$user->obj['password'] = $password;
			$user->create();

			$_SESSION['alias_session'] = $alias;

			$last_link = (isset($_SESSION['last_link']) && $_SESSION['last_link'] != '') ? $_SESSION['last_link'] : 'index.php';
			header('Location: '.$last_link);
	}
}

function update_last_change($Id){
	$confession = confession();
	$confession->obj['lastChange'] = 'NOW()';
	$confession->update("Id='$Id'");
}

function check_notification(){
	$notification = notification();
	$notification->obj['status'] = 0;
	$notification->update("recepient like '%".$_SESSION['alias_session']."'");

	header('Location: index.php?view=notification');
}

function delete_notification(){

	$id = $_GET["id"];
	$confessionId = $_GET["confessionId"];
	$commentId = $_GET["commentId"];
	notification()->delete("id=$id");

	header('Location: index.php?view=display&id='.$confessionId.'#'.$commentId);
}

function confess()
{

		$confession = confession();
		$confession->obj['alias'] = $_SESSION['alias_session'];
		$confession->obj['category'] = $_POST['category'];
		$confession->obj['title'] = $_POST['title'];
		$confession->obj['message'] = $_POST['message'];
		$confession->obj['location'] = $_POST['location'];
		$confession->obj['datetime'] = 'NOW()';
		$confession->obj['lastChange'] = 'NOW()';
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

	// update last change
	update_last_change($Id);

}

function add_comment()
{
	$Id=$_GET['id'];
	$alias = $_SESSION['alias_session'];

	$comment = comment();
	$comment->obj['cId'] = $Id;
	$comment->obj['alias'] = $alias;
	$comment->obj['comment'] = $_POST['comment'];
	$comment->obj['datetime'] = "NOW()";
	$comment->create();

	$lastComment = comment()->get("alias='$alias' order by Id desc limit 1");

	// Notify mentioned alias
	$list = explode(" ", $_POST['comment']);
	foreach ($list as $item){
		if (strpos($item, '@') !== false) {
			$notification = notification();
			$notification->obj['recepient'] = $item;
			$notification->obj['message'] = "You have been mentioned by ".$_SESSION['alias_session']." in a comment";
			$notification->obj['confessionId'] = $Id;
			$notification->obj['commentId'] = $lastComment->Id;
			$notification->obj['type'] = $item;
			$notification->obj['status'] = "1";
			$notification->obj['datetime'] = "NOW()";
			$notification->create();
		}
	}

	// update last change
	update_last_change($Id);

	header('Location: index.php?view=display&id='.$Id);

}

function contact_us()
{
	$email=$_POST['email'];
	$message=$_POST['message'];
	$message = 'From: '.$_SESSION['alias_session'].', '.$email.', <br>'.$message;
	sendEmail('phconfession2018@gmail.com', $message);

	header('Location: index.php');

}

function close_notif()
{
	$_SESSION['close_notif'] = $_SESSION['alias_session'];
}

function logout()

{
	//logout.php
session_start();
session_destroy();
header('Location: index.php');
	exit;
}



?>
