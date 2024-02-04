<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message  = $_POST['message'];
$mobile  = $_POST['mobile'];

$email_from = 'Info@karansuthar.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n",
              "User Email: $visitor_email.\n",
              "Subject: $subject.\n",
              "User Mobile: $mobile.\n",
              "User Message: $message.\n";

$to = 'saheb2karanmistry@gmail.com'

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>