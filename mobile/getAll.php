<?php

$list = array();
$list["confession"] = confession()->list();
$list["comment"] = comment()->list();
$list["notification"] = notification()->list();
$list["relate"] = relate()->list();
$list["user"] = user()->list();

$auth = (isset($_POST['auth']) && $_POST['auth'] != '') ? $_POST['auth'] : '';

if ($auth=="phconfession123456789sunsetcity"){
  echo json_encode($list);
}

?>
