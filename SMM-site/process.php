<?php
// Information to be modified
$to_email = "alenwllds@gmail.com"; 
$subject = "Contact Request"; 
$thanks_page = "index.php"; 
$contact_page = "index.php"; 


$nam = strip_tags($_POST["contact_name"]);
$ema = strip_tags($_POST["contact_email"]);
$com = strip_tags($_POST["contact_message"]);	

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: <' .$ema. '>' . "\r\n";
$headers .= "Reply-To: ".$ema."\r\n";

$email_body = 
	"<strong>From: </strong>" . $nam . "<br />
	<strong>Email: </strong>" . $ema . "<br />	
	<strong>Message: </strong>" . $com;
	
	
if( mail($to_email, $subject, $email_body, $headers) ) {	
	echo '<i class="glyphicon glyphicon-ok"></i> Thank you ' .$nam. '. Your Email was successfully sent!';
} else {	
	echo '<i class="glyphicon glyphicon-remove"></i> Sorry ' .$nam. '. Your Email was not sent. Resubmit form again Please..';
}
die();