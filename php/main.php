
<?php


$username = $_POST["name"];
$number = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];

require_once '../php/sendEmail.php';
require_once '../php/sendSms.php';
require_once '../php/deliver.php';

if(empty($number) and empty($email)){
    header("location: ../index.php?error=phoneandemailempty");
}
else if(!empty($number) and !empty($email)){

    sendSms($number, $message);
    sendEmail($email, $message);

    header('Location: ../results.php?error=emailandsmsSentSuccessfully');

}

else if(!empty($email)){
    $a = sendEmail($email, $message);

    header('Location: ../results.php?error='.$a);
}
else if(!empty($number)){
    sendSms($number, $message);

    header('Location: ../results.php?error=smsSentSuccessfully');
}

