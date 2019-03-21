<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);
		
    $name = @trim(stripslashes($_POST['firstname']));
    $sname = @trim(stripslashes($_POST['lastname']));
    $email = @trim(stripslashes($_POST['email']));
    $message = @trim(stripslashes($_POST['message']));
    
    $email_from = $email;	
    $email_to = 'info@multinetnigeria.com';
    $subject = "Multinet contact form: ".$name." ". $sname;
		
    $body = 'Name: ' . $name ." ". $sname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;
    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
  
    header("Location: http://multinetnigeria.com/contact-us.php");
    exit;


