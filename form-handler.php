<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$service_needed = $_POST['service needed'];
$message = $_POST['message'];

$email_from = 'info@mywebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
            = "User Email: $visitor_email.\n".
            = "Service Needed: $subject.\n".
            = "User Message: $message.\n";

$to = 'ghblesso@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>