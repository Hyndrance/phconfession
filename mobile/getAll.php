<?php

$list = array();
$list["confession"] = confession()->list();
$list["comment"] = comment()->list();
$list["notification"] = notification()->list();
$list["relate"] = relate()->list();
$list["user"] = user()->list();

echo json_encode($list);

?>
