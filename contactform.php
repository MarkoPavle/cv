<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'markopavle@gmail.com';
	$subject = "contact";

    //headers

    $headers = "From : ".$email;

    $txt = "You have received an e-mail from".$name.".\n\n".$message;

	//Send
	$send = mail($to, $subject, $txt, $headers );

	if($send){
		echo 'Thank you for contacting me!';
	}
	else {
		echo 'Error';
	}

}
?>