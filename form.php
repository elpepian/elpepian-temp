<?php
if($_POST){
    $nom = $_POST['nom'];
    $ema = $_POST['ema'];
    $mes = $_POST['mes'];
    $message = "Nombre y apellido: " . $nom . "\r\n";
    $message .= "Correo electrónico: " . $ema . "\r\n";
    $message .= "Dime lo que quieras: " . $mes . "\r\n";
    $headers = 'From: ' . $nom . '<' . $ema . '>' . "\r\n";

	//send email
    mail("escribele@elpepian.net", "Contacto desde elpepian.net", $message, $headers);
	}
?>