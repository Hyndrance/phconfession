<?php

function send_notification($tokens, $message){

  $notification = array(
            "body" => $message["message"],
            "title" => "ti mo",
                );

  $url = "https://fcm.googleapis.com/fcm/send";
  $fields = array(
      'registration_ids' => $tokens,
      'notification' => $notification
  );

  $headers = array(
      'Authorization:key=AAAALOR4AxY:APA91bG8V30D34-rIykW9DgGwGmaOr9XfwUQr21eo91N5ZRHpYiygryTcLSgLSPmHcrAmsy9jB8KBNx4Sju6YMEVlGnLVDaX40E1iMr_0oOnHdQ-Kz497dOUUSHg8q9AJqcK2iNeumHL',
      'Content-Type: application/json'
  );

  // Open connection
  $ch = curl_init();

  // Set the url, number of POST vars, POST data
  curl_setopt($ch, CURLOPT_URL, $url);

  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Disabling SSL Certificate support temporarly
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

  // Execute post
  $result = curl_exec($ch);
  if ($result === FALSE) {
      die('Curl failed: ' . curl_error($ch));
  }

  // Close connection
  curl_close($ch);
  return $result;
}
$tokens = array("cGnnU4k65qs:APA91bHAT0FxssYqOQCoW7L6tgbKSQyScoOYKzkPNkpxPYVFx4Gdd3EYHxB6b-MIDZKtIqklJSMKzCMosB0cfLrjbnd2EZHXZHm8n_CZwXz6em6HumLQwEVejxKgh2uD8AadbYK7RucM");

$message = array("message" => "FCM push notification");

$message_status = send_notification($tokens,$message);

echo $message_status;


?>
