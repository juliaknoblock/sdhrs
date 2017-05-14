<?php
	$mail_to = 'hrs@sandiegorabbits.org'; // specify your email here

	// Assigning data from $_POST array to variables
	$name = $_POST['sender_name'];
	$mail_from = $_POST['sender_email'];
	$message = $_POST['sender_message'];
	

	/*$message = $_POST['sender_message'];
	$
	
	$host_plan = $_POST['radio_group_1'];
	$additional_options = implode(' | ', $_POST['checkbox_group_1']);
	$host_period = $_POST['dropdown'];*/
	
	// Construct subject of the email
	$subject = 'Contact Form Submission ' . $name;

	// Construct email body
	$body_message = 'From: ' . $name . "\r\n";
	$body_message .= 'E-mail: ' . $mail_from . "\r\n";
	$body_message .= 'Message: ' . $message . "\r\n";
	



	/*// Construct headers of the message
	$headers = 'From: ' . $mail_from . "\r\n";
	$headers .= 'Reply-To: ' . $mail_from . "\r\n";*/

	$mail_sent = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>
		<script language="javascript" type="text/javascript">
		alert('Thank you for reaching out. We will get back to you shortly.');
		window.location = 'index.php';
		</script>
	<?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please try again');
        window.location = 'adopterprofile.html';
    </script>
	<?php
	}
?>
