<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];
$formcontent = " From: $name \n Subject: $subject \n Your Message: $comments";
$recipient = "me@dawsonrichey.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='home.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
