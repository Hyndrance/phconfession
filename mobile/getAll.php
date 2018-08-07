<?php

$auth = (isset($_POST['auth']) && $_POST['auth'] != '') ? $_POST['auth'] : '';
$lastChange = (isset($_POST['lastChange']) && $_POST['lastChange'] != '') ? $_POST['lastChange'] : 0;

$list = array();
$list["confession"] = confession()->list("Id>$lastChange");
$list["comment"] = comment()->list();
$list["notification"] = notification()->list();
$list["relate"] = relate()->list();
$list["user"] = user()->list();

if ($auth=="phconfession123456789sunsetcity"){
  echo json_encode($list);
}

?>
