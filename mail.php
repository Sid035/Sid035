<?php
$to_email="sidsneha19@gmail.com";
$subject="simple email test via php";
$body="hi,this is test email send by php script";
$headers="From: sender email";
if (mail($to_email,$subject,$body,$headers))
{
    echo"Email successfully send to
    $to_email...";
}else{
    echo"email sending failed...";
}