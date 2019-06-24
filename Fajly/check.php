<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$textar = $_POST['textar'];

	$error = "";
	if(trim($firstName) == ""){
		$error = "Wprowadź imię";
	}
	$error = "";
	if(trim($lastName) == ""){
		$error = "Wprowadź nazwisko";
	}
	$error = "";
	if(trim($email) == ""){
		$error = "Wprowadź email";
	}
	else if (trim($textar) == "") {
		$error = alert("Wprowadź wiadomość");
	}

	if($error != ""){
		echo $error;
		exit;
	}

	$subject = "=?utf-8?B?".base64_encode("test soobsczenije")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent type: text/html; charset=utf-8\r\n";

	mail("vasylkohut1991@gmail.com", $subject, $textar, $headers);
	header("Location: /body_kontakt.php");
?>