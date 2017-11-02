<?php

$webmaster_email = "mtguidancehome@gmail.com";

$feedback_page = "contact.html";
$error_page = "error_message.html";
$thankyou_page = "thank_you.html";

$author = $_REQUEST['author'] ;
$email = $_REQUEST['email'] ;
$phnum = $_REQUEST['phnum'] ;
$subject = $_REQUEST['subject'] ;
$msg = $_REQUEST['msg'] ;

function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

if (!isset($_REQUEST['author'])) {
header( "Location: $feedback_page" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($author) || empty($email) || empty($phnum) || empty($subject) || empty($msg)) {
header( "Location: $error_page" );
}

// If email injection is detected, redirect to the error page.
elseif ( isInjected($author) ) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {
mail( $webmaster_email, $subject, "Message:".$msg." From:".$author."<".$email.">"." Phone:".$phnum, " From:".$email_address);
header( "Location: $thankyou_page" );
}
?>