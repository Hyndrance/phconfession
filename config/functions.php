<?php

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
	$cat[11] = 'Joke time';
	$cat[12] = 'Scary AF';
	$cat[13] = '3 AM Thought';
	return $cat;
	/*
	red 6 9
	orange 5 7
	yellow 8 10
	green 1 2
	blue 3 4
	indigo 11 12
	violet
	*/
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
	$head_color[11] = 'background:#0ab3c7;color:white;';
	$head_color[12] = 'background:#e94440;color:white;';
	return $head_color;
}

/* Retrieve one record */
function uploadFile($uploadedFile){
	// Where the file is going to be placed
	$target_path = "../media/";
	/* Add the original filename to our target path.
	Result is "uploads/filename.extension" */
	$target_path = $target_path . basename( $uploadedFile['name']);
	$temp = explode(".", $uploadedFile["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);

	if(move_uploaded_file($uploadedFile['tmp_name'], '../media/' . $newfilename)) {
			return $newfilename;
		}
		else{
			return 0;
		}

}

/* =====================================Functions===================================== */
/* Retrieve one record */
function uploadMultipleFile($uploadedFile){

	$filenameList = array();

	$countfiles = count($uploadedFile['name']);

	if (false){
		for($i=0;$i<$countfiles;$i++){
			// File name
		   	$filename = $uploadedFile['name'][$i];
		   	// Get extension
	  		 $ext = explode(".", $filename);
			   if(move_uploaded_file($uploadedFile['tmp_name'][$i],'../media/'.$filename)){
			   		$filenameList[] = $filename;
				}
				else{
			   		$filenameList['error'] = true;
				}
		}
			return $filenameList;
	}
	else{
			return false;
	}

}

/* =====================================Functions===================================== */

/* Send email */
function sendEmail($email, $content){

	require_once "include/email/swift/lib/swift_required.php";

	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
										->setUsername('phconfession2018@gmail.com')
										->setPassword('hyndrance2018');

	$mailer = Swift_Mailer::newInstance($transport);

	try{
	 $message = Swift_Message::newInstance("Message by: $email")
										->setFrom(array('phconfession2018@gmail.com' => 'Contact Us'))
										->setTo(array($email));

	$message->setBody($content, 'text/html');
	}
	catch (Swift_RfcComplianceException $e){
	    print('Sorry for the inconvenience. Could not connect to email server. Try again.:' . $e->getMessage());
	}

	if(!empty($targetpath)) {
		 $message->attach(Swift_Attachment::fromPath($targetpath));
	}

	if (!$mailer->send($message, $errors)) {
		echo "Error:";
		print_r($errors);
	}


}


/* =====================================Functions===================================== */

/* time elapse */

function timeElapse($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function get_mention($text){
	// Example 1
$list = explode(" ", $text);
$message = "";
	foreach ($list as $item){
		if (strpos($item, '@') !== false) {
			$message .=" <spam style='font-weight:bold;color:orange;'>".$item."</spam>";
		}
		else{
			$message .=" ".$item;
		}
	}
return $message;
}

// ===========================================================================

function send_fcm_notification($tokens, $body, $title){

  $notification = array(
            "body" => $body,
            "title" => $title,
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

?>
