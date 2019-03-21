<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'markopavle@gmail.com';
	$subject = "subject";

    //headers

    $headers = "From : ".$email;

    $txt = "You have received an e-mail from".$name.".\n\n".$message;

	//Send
	mail($to, $subject, $txt, $headers );

	header("Location: index.html?mailsend");

}
?>
