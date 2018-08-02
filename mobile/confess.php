<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $alias = $_POST["alias"];

  $response = array();
  if(user()->count("alias='$alias'")>0){
    $response["success"] = "true";
    
    $confession = confession();
    $confession->obj['alias'] = $_POST['alias'];
    $confession->obj['category'] = $_POST['category'];
    $confession->obj['title'] = $_POST['title'];
    $confession->obj['message'] = $_POST['message'];
    $confession->obj['location'] = $_POST['location'];
    $confession->obj['datetime'] = 'NOW()';
    $confession->obj['lastChange'] = 'NOW()';
    $confession->create();

  }
  else{
    $response["success"] = "false";
  }
  echo json_encode($response);
}
?>
