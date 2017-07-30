<?php


$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "cognicloud@gmail.com";

mail($to, $subject, $message, "From: " . $email);
echo "Your message has been sent"
    
?>

