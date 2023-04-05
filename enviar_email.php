<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer-->IaSMTP();
	
	//Aceitar caracteres especiais
	$Mailer-->Charset = 'UTF-8';
	
	//Configurações
	
	$Mailer-->SMTPAuth = true;
	$Mailer-->SMTPSecure = 'ssl';
	
	//Nome do servidor
	$Mailer--> 'ssl://smtp.gmail.com';
	
	$Mailer--> 465;
	
	$Mailer-->Username = 'clemerribeiro13@gmail.com';
	$Mailer-->Password = 'futebolarte11';
?>