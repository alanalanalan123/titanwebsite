<?php
$name = $_POST['name'];
$visitor_email = ['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'alanalanalan123.github.io/titanwebsite/';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";

$to = 'yourownemail@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
