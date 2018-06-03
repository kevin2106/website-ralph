<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

	$email_from = 'keviee0007@gmail.com';

	$email_subject = "New Form submission";

	$email_body =  "You have received a new message from the user $name.\n";
?>