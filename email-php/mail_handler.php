<?php
	$address = "vasishta.work@gmail.com"; /*CHANGE !!! Your Email*/
	$subject = "website | ".$_REQUEST[subject]; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$Email=$_REQUEST['email'];

	$msg="<pre>
Name: $_REQUEST[name]
Email: $_REQUEST[email]
Subject: $_REQUEST[subject]</pre><pre>
Message sent from website on date  $date, hour: $time.\n</pre><pre>
Message:
$_REQUEST[message]</pre>";
	
	$to = $address;
	$from = $Email;
	$message = $msg;

	if ($Email=="") {
		echo "Error";
	}
	else{
		//include('smtp/smtpwork.php');
	        require("vendor/autoload.php");
	        $sendgrid = new SendGrid('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');
        	$email = new SendGrid\Email();
	        $email
        	        ->addTo("$to")
	                ->setFrom("$from")
        	        ->setSubject("$subject")
                	->setHtml("$msg");

	        $sendgrid->send($email);

		// echo "<div class='alert alert-success'>Thank you for your message..</div>";	
		echo "Sent";	
	}
	
?>
