<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

// if (isset($_GET['submit'])) {
        
        //echo $_GET['email'];
        
     
    $children=$_GET['children'];
    $adults=$_GET['adults'];
    $checkout=$_GET['checkout'];
    $checkin=$_GET['checkin'];
    $to='akhilglobosoft@gmail.com';
    $fromemail = $email;
// }

//From email address and name
$mail->From = "akhilglobosoft@gmail.com";
$mail->FromName = "Darpan Banasura";

//To address and name
$mail->addAddress("akhilglobosoft@gmail.com", "Darpan Banasura");
$mail->addAddress("akhilglobosoft@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";



//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission 465 ssl
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'akhilglobosoft@gmail.com';
$mail->Password = 'gaochnjfpngnmxdq';

$mail->isHTML(true);

$mail->Subject = "Booking Enquiry From Darpan Banasura ";
$mail->Body = "<html>
			  <head>
				<title> Darpan Banasura </title>
			  </head>
			  <body>
				<h3>  Darpan Banasura :  Contact Us </h3>
				<table>
				
				<tr><td> Check In</td><td>:</td><td>".$checkin."</td></tr>
				<tr><td> Check Out </td><td>:</td><td>".$checkout."</td></tr>
				 <tr><td> Adults </td><td>:</td><td>".$adults."</td></tr>
				 <tr><td> Children </td><td>:</td><td>".$children."</td></tr>
				 
				</table>
				<div style='width:100%; text-align:justify; font-size:10px; line-height:12px; color:#111' >
				
				</div>
			  </body>
			</html>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    header('Location: contact.php');
    //echo "Message has been sent successfully";
} catch (Exception $e) {
    header('Location: contact.php');
    //echo "Mailer Error: " . $mail->ErrorInfo;
}