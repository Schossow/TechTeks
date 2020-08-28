<?php 

	$destino= "info@techteks.net";
	$nombre= $_POST["nombre"];
	$correo= $_POST["correo"];
	$asunto= $_POST["asunto"];
	$mensaje= $_POST["mensaje"];

	$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
	
	$verification = mail($destino, $asunto, $contenido);
	header("Location:index.html");

?>