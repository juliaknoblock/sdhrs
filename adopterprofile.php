<?php
	$mail_to = 'adopt@sandiegorabbits.org, jennifer@sandiegorabbits.org, shelter@sandiegorabbits.org, desi@sandiegorabbits.org' ; // specify your email here

	// Assigning data from $_POST array to variables
	$name = $_POST['sender_name'];
	$mail_from = $_POST['sender_email'];
	$dob = $_POST['sender_dob'];
	$sender_address = $_POST['sender_address'];
	$sender_city = $_POST['sender_city'];
	$phone = $_POST['sender_phone'];
	$living_situation = implode(' | ', $_POST['living_situation']);
	$landlord_contact = $_POST['landlord_contact'];
	$all_want = $_POST['all_want'];
	$why_want = $_POST['why_want'];
	$looked_elsewhere = $_POST['looked_elsewhere'];
	$personality = $_POST['personality'];
	$rabbit_role = implode(' | ', $_POST['rabbit_role']);
	$role_describe = $_POST['role_describe'];
	$allergies = $_POST['allergies'];
	$allergies_explain = $_POST['allergies_explain'];
	$kids_ages = $_POST['kids_ages'];
	$gift = $_POST['gift'];
	$rabbit_past = $_POST['rabbit_past'];
	$where_rabbit = $_POST['where_rabbit'];
	$gave_away = $_POST['gave_away'];
	$other_pets = $_POST['other_pets'];
	$other_rabbits = $_POST['other_rabbits'];
	$housing = $_POST['housing'];
	$living_area = $_POST['living_area'];
	$have_supplies = $_POST['have_supplies'];
	$housing_size = $_POST['housing_size'];
	$learned_care = implode(' | ', $_POST['learned_care']);
	$care_for_duration = implode(' | ', $_POST['care_for_duration']);
	$prevent = implode(' | ', $_POST['prevent']);
	$afford_boarding = $_POST['afford_boarding'];
	$medical_expenses = implode(' | ', $_POST['medical_expenses']);
	$more_info = implode(' | ', $_POST['more_info']);
	$other_info_explain = $_POST['other_info_explain'];
	$interested_rabbit = $_POST['interested_rabbit'];
	$hear_about_us = $_POST['hear_about_us'];

	/*$message = $_POST['sender_message'];
	$
	
	$host_plan = $_POST['radio_group_1'];
	$additional_options = implode(' | ', $_POST['checkbox_group_1']);
	$host_period = $_POST['dropdown'];*/
	
	// Construct subject of the email
	$subject = 'Adopter Profile ' . $name;

	// Construct email body
	$body_message = 'From: ' . $name . "\r\n";
	$body_message .= 'E-mail: ' . $mail_from . "\r\n";
	$body_message .= 'Phone: ' . $phone . "\r\n";
	$body_message .= 'Date of birth: ' . $dob . "\r\n";
	
	$body_message .= 'Address: ' . $sender_address . "\r\n";
	$body_message .= 'City, State, Zip: ' . $sender_city . "\r\n";
	$body_message .= 'Current living situation: ' . $living_situation. "\r\n";
	$body_message .= 'Landlord contact info: ' . $landlord_contact. "\r\n";
	$body_message .= 'All members want a rabbit: ' . $all_want. "\r\n";
	$body_message .= 'Why do you want a rabbit? ' . $why_want. "\r\n";
	$body_message .= 'Looked elsewhere: ' . $looked_elsewhere. "\r\n";
	$body_message .= 'Personality: ' . $personality. "\r\n";
	$body_message .= 'Rabbit role: ' . $rabbit_role. "\r\n";
	$body_message .= 'Rabbit role description: ' . $role_describe. "\r\n";
	$body_message .= 'Allergies: ' . $allergies. "\r\n";
	$body_message .= 'Allergies explained: ' . $allergies_explain. "\r\n";
	$body_message .= 'Ages of kids: ' . $kids_ages. "\r\n";
	$body_message .= 'Gift? ' . $gift. "\r\n";
	$body_message .= 'Had a rabbit in the past: ' . $rabbit_past. "\r\n";
	$body_message .= 'Where is the rabbit now: ' . $where_rabbit. "\r\n";
	$body_message .= 'Ever given away: ' . $gave_away. "\r\n";
	$body_message .= 'Other pets in house: ' . $other_pets. "\r\n";
	$body_message .= 'Other rabbits in house: ' . $other_rabbits. "\r\n";
	$body_message .= 'Housing: ' . $housing. "\r\n";
	$body_message .= 'Description of living area: ' . $living_area. "\r\n";
	$body_message .= 'Have supplies: ' . $have_supplies. "\r\n";
	$body_message .= 'Housing size: ' . $housing_size. "\r\n";
	$body_message .= 'Learned about rabbit care from: ' . $learned_care. "\r\n";
	$body_message .= 'Prepared to care for duration: ' . $care_for_duration. "\r\n";
	$body_message .= 'Prevent from keeping: ' . $prevent. "\r\n";
	$body_message .= 'Afford boarding: ' . $afford_boarding. "\r\n";
	$body_message .= 'Afford medical expenses: ' . $medical_expenses. "\r\n";
	$body_message .= 'Would like more information: ' . $more_info. "\r\n";
	$body_message .= 'Other info explain: ' . $other_info_explain. "\r\n";
	$body_message .= 'Interested rabbit: ' . $interested_rabbit. "\r\n";
	$body_message .= 'Heard about us from: ' . $hear_about_us. "\r\n";



	/*// Construct headers of the message
	$headers = 'From: ' . $mail_from . "\r\n";
	$headers .= 'Reply-To: ' . $mail_from . "\r\n";*/

	$mail_sent = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>
		<script language="javascript" type="text/javascript">
		alert('Thank you for subbmitting an adopter profile. We will contact you shortly. Feel free to close this tab or window now.');
		window.location = 'adopterprofile.html';
		</script>
	<?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please try again');
        window.location = 'adopterprofile.html';
    </script>
	<?php
	}
?>
