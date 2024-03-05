<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$email_form = 'http://127.0.0.1:5500/forntpage.html';

$email_subject  = "New form submission";
$email_body = "User name :$name.\n".
               "User email : $visitor_email.\n ".
               "User name :$subject.\n".
               "User name :$message.\n";
               
               
$to = "safwanwr111@gmail.com";
$headers = "Form:$email_form \r \n";
$headers . = "Reply-To:$visitor_email \r \n";
mail($to,$email_subject,$email_body,$headers);
header("Location:http://127.0.0.1:5500/contact-brri.html");
?>