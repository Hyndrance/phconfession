<?php

$auth = (isset($_POST['auth']) && $_POST['auth'] != '') ? $_POST['auth'] : '';
$lastConfession = (isset($_POST['lastConfession']) && $_POST['lastConfession'] != '') ? $_POST['lastConfession'] : 0;
$lastComment = (isset($_POST['lastComment']) && $_POST['lastComment'] != '') ? $_POST['lastComment'] : 0;
$lastRelate = (isset($_POST['lastRelate']) && $_POST['lastRelate'] != '') ? $_POST['lastRelate'] : 0;
$lastNotification = (isset($_POST['lastNotification']) && $_POST['lastNotification'] != '') ? $_POST['lastNotification'] : 0;

$list = array();
$list["confession"] = confession()->list("Id>$lastConfession");
$list["comment"] = comment()->list("Id>$lastComment");
$list["notification"] = notification()->list("Id>$lastNotification");
$list["relate"] = relate()->list("Id>$lastRelate");
$list["user"] = user()->list();

if ($auth=="phconfession123456789sunsetcity"){
  echo json_encode($list);
}

?>
