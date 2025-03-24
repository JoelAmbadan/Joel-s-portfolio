<?php

    error_reporting(0);
	
	$mailID = "akhilglobosoft@gmail.com";
	
		
	if(isset($_POST['email']) && $_POST['email'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
	    
	  
			
			$subject = "Darpan - Contact Us - ".$_POST['name'];
			
			$message = "
			<html>
			  <head>
				<title> Darpan Banasura </title>
			  </head>
			  <body>
				<h3>  Darpan Banasura :  Contact Us </h3>
				<table>
				
				<tr><td> Name</td><td>:</td><td>".$_POST['name']."</td></tr>
				<tr><td> Phone Number </td><td>:</td><td>".$_POST['phone']."</td></tr>
				 <tr><td> Email </td><td>:</td><td>".$_POST['email']."</td></tr>
				 <tr><td> Email </td><td>:</td><td>".$_POST['subject']."</td></tr>
				 <tr><td> Message</td><td>:</td><td>".$_POST['message']."</td></tr>
				
				 
				 
				</table>
				
			  </body>
			</html>
			";	
		
		if($subject != '') {
		    
		   
		
			$from = "akhilglobosoft@gmail.com";
			
			$to = "akhilglobosoft@gmail.com";
			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' . $from . "\r\n";
			$headers .= 'Reply-To: ' . $from . "\r\n";
			$headers .= 'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			
		}
		
		  header('Location: thanks.php');
	}
	
?>