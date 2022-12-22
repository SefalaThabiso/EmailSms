<?php

    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function sendEmail($recipient, $message){
    $mail = new PHPMailer(true);

    try {+

        $mail->SMTPDebug = 2;				
        $mail->isSMTP();										
        $mail->Host	 = 'smtp.gmail.com';					
        $mail->SMTPAuth = true;							
        $mail->Username = 'thabisomarcus42@gmail.com';				
        $mail->Password = 'dxmypplmrighadfx';						
        $mail->SMTPSecure = 'tls';							
        $mail->Port	 = '587';
        $mail->setFrom('thabisomarcus42@gmail.com', 'Website name');		
        $mail->addAddress($recipient);
        //$mail->addAddress('recipient2@example.com', 'Name');
        $mail->isHTML(true);								
        $mail->Subject = 'Automated mesage';
        $mail->Body = $message;
        //$mail->AltBody = $email_details['alt_body'];
        $mail->send();
        echo "<h1>Mail has been sent successfully!</h1>";
        return "123";
    
    } catch (Exception $e) {
    
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
    }

}


if(isset($_POST['submit'])){
    

}

