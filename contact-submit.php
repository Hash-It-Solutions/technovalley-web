<?php
session_start();
error_reporting(1);
if(isset($_POST['submit-form']))
{
$subject = 'Website Enquiry Form';

$name=$_POST['name'];
$email=$_POST['email'];
$emailus="renibabu111@gmail.com";
$phone=$_POST['phone'];
$course=$_POST['course'];
$center=$_POST['center'];
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

$mail_content    = "Dear Team,<br><br>You have a new Enquiry through website, by <b>".$name."</b> @ ".$currentTime."<br><br>
	<b><u>Enquiry Details</u></b><br><strong>Name:</strong> ".$name."<br><strong>Contact No.</strong>: ".$phone."<br><strong>Email: </strong>".$email."<br><br><strong>Course: </strong>".$course."<br><strong>Center: </strong>".$center." <br><br>Thank you, <br> Technovalley .";

$to = $emailus;
$subject = $subject;
$txt = $mail_content;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: renibabu111@gmail.com";

if(mail($to,$subject,$txt,$headers))
{
	$_SESSION['messages']="Thank You ".$name.". Your Message has been sent Successfully. We will contact you back soon.";

}
else {
	$_SESSION['messages']="Sorry, the message could not be sent.";
	
}
header("Location:contact.php");
}?>