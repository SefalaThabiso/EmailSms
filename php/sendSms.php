<?php

function sendSms($number, $message){
    
    $messages = array('to' => $number ,'body' => $message);
    print_r($message);

    $username = 'thabiso143';
    $password = '5z5cgQ3xuwAmc3m';
    $url = 'https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30';

    $result = deliverMessage( json_encode($messages), $url, $username, $password );
  
  if ($result['http_status'] != 201) {
    print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
  } else {
    print "Response " . $result['server_response'];
   
  };
  }