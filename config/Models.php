<?php
include "CRUD.php";

// User Models
function category() {
	$cat = array();
	$cat[1] = 'A Dream';
	$cat[2] = 'A Fantasy';
	$cat[3] = 'A First Experience';
	$cat[4] = 'A Guilt';
	$cat[5] = 'A Lie';
	$cat[6] = 'A Pain';
	$cat[7] = 'A Truth';
	$cat[8] = 'A Wild Experience';
	$cat[9] = 'A Regret';
	return $cat;
}

// User Models
function confession() {
	$crud = new CRUD;
	$crud->table = "confession";
	return $crud;
}

?>
