<?php
include "CRUD.php";

// User Models
function category() {
	$cat = array();
	$cat[1] = 'My weird dream';
	$cat[2] = 'What I fantasize';
	$cat[3] = 'First time and unforgettable';
	$cat[4] = 'My guilt';
	$cat[5] = 'What I lie about';
	$cat[6] = 'A Pain';
	$cat[7] = 'What the truth is';
	$cat[8] = 'My wild experience';
	$cat[9] = 'A regret';
	$cat[10] = 'Just saying';
	return $cat;
}

// button colers
function button_color() {
	$head_color = array();
	$head_color[1] = 'background:#fc9209;color:white;';
	$head_color[2] = 'background:#51ab55;color:white;';
	$head_color[3] = 'background:#e94440;color:white;';
	$head_color[4] = 'background:#0ab3c7;color:white;';
	$head_color[5] = 'background:#9c27b0;color:white;';
	$head_color[6] = 'background:#009688;color:white;';
	$head_color[7] = 'background:#3f51b5;color:white;';
	$head_color[8] = 'background:#e91e63;color:white;';
	$head_color[9] = 'background:#f16695;color:white;';
	$head_color[10] = 'background:#9c27b0;color:white;';
	return $head_color;
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
