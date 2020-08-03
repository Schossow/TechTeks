<?php 

	$destino= "info@techteks.net";
	$nombre= $_Post["nombre"];
	$email= $_Post["email"];
	$asunto= $_Post["asunto"];
	$mensaje= $_Post["mensaje"];

	$contenido= "Nombre: " . $nombre . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
	mail($destino, $asunto, $contenido);
	header("Location:index.html");

 ?>