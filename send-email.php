<?php
// Retrieve form data
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];

// Set recipient email address
$to = 'dver1293@gmail.com';

// Set email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Send the email
mail($to, $subject, $message, $headers);
?>
