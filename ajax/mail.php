<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$subject = "=?utf-8?B?".base64_encode("Powiadomienia ze strony Czeburek.pl")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent type: text/html; charset=utf-8\r\n";

	$success = mail("vasylkohut1991@gmail.com", $subject, $message, $headers);
	var_dump($success);

	echo $success;
?>