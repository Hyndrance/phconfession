<?php
include "CRUD.php";
include "functions.php";

// User Models
function user() {
	$crud = new CRUD;
	$crud->table = "user";
	return $crud;
}
// User Models
function confession() {
	$crud = new CRUD;
	$crud->table = "confession";
	return $crud;
}
// User Models
function comment() {
	$crud = new CRUD;
	$crud->table = "comment";
	return $crud;
}
// User Models
function relate() {
	$crud = new CRUD;
	$crud->table = "relate";
	return $crud;
}
// User Models
function notification() {
	$crud = new CRUD;
	$crud->table = "notification";
	return $crud;
}

?>
