<?php
$to_email = "chander.secureweb@gmail.com";
$subject = "Test email to send from XAMPP";
$body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
$headers = "From: ajad.secureweb@gmail.com";
if (mail($to_email, $subject, $body, $headers))
 
{
    echo "Email successfully sent to $to_email...";
}
 
else
 
{
    echo "Email sending failed!";
}
  ?>