<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $alias = $_POST["alias"];
  $password = $_POST["password"];
  $fcmToken = $_POST["fcmToken"];

  $response = array();
  if(user()->count("alias='$alias' and password='$password'")>0){
    $response["success"] = "true";
    $response["user"] = user()->get("alias='$alias' and password='$password'");

    // Update FCM $token
    $user = user();
    $user->obj['fcmToken'] = $fcmToken;
    $user->update("alias='$alias'");
  
  }
  else{
    $response["success"] = "false";
  }
  echo json_encode($response);
}
?>
