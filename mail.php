<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('includes/Exception.php');
require('includes/SMTP.php');
require('includes/PHPMailer.php');

if(isset($_POST['sub']))
{ 
    $name=$_POST['name'];
    $email_id=$_POST['email'];
    
    $mail = new PHPMailer(true);
    try {
        //Server settings
                           
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = ' smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sidsne19@gmail.com';                     //SMTP username
        $mail->Password   = 'siddeshsneha';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('sidsne19@gmail.com', 'sidsne');
        $mail->addAddress($_POST['email']);     //Add a recipient
        
         //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = "$name thank you for booking an appointment <br> $email_id";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

