<?php

if(isset($_POST['submit'])){
	$nome = $_POST['nome'];
	$6= $_POST['email'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "marcos43@uft.edu.br";
	$headers = "From: ".$mailfrom;
	$txt = "Você recebeu um email de ".$nome.".\n\n".$message

	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php?mailsend");
}
