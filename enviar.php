<?php 

	$destino= "info@techteks.net";
	$nombre= $_Post["nombre"];
	$correo= $_Post["correo"];
	$asunto= $_Post["asunto"];
	$mensaje= $_Post["mensaje"];

	$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
	
	$verification = mail($destino, $asunto, $contenido);
	header("Location:index.html");

?>