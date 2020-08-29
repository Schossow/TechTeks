<?php
      $username = $_POST['nombre'];
	  $useremail = $_POST['email'];
	  $serviceselected = $_POST['seleccion'];
      $usermessage = $_POST['mensaje'];

	   $myemail = "info@techteks.com, 
					   alejandrobenavidesmontano@gmail.com,
					   schossow.1373@gmail.com"; //Hacia donde va
	   $ehead = "Content-Type: text/html; charset=UTF-8"; //Caracteres especiales
       $emess = "Nombre: ".$username."\n"; //Nombre
	   $emess.= "Email: ".$useremail."\n"; //Email
	   $emess.= "Servicio de interés: ".$serviceselected; //Servicio de interes
	   $emess.= "Comentarios adicionales: ".$usermessage; //Mensaje complementario
       $subj = "Consulta de Servicios TechTeks"; //Asunto
       $mailsend = @mail("$myemail","$subj","$emess","$ehead");
      if ($mailsend){
		 header('Location: contact.html');
		 echo "Mensaje enviado con éxito!";
	  }
	  else{
		  echo "No se pudo enviar el Email porque ocurrió un error!";
		  header('Location: contact.html');
	  }
      
?>
