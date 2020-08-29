<?php
      $username = $_POST['nombre'];
	  $useremail = $_POST['email'];
	  $serviceselected = $_POST['seleccion'];
      $usermessage = $_POST['mensaje'];

	   $myemail = "info@techteks.net, 
					   alejandrobenavidesmontano@gmail.com,
					   schossow.1373@gmail.com"; //Hacia donde va
	   $ehead = "Content-Type: text/html; charset=UTF-8"; //Caracteres especiales
       $emess = "Nombre: ".$username."<br>"; //Nombre
	   $emess.= "Email: ".$useremail."<br>"; //Email
	   $emess.= "Versión: v1.0.1.28082020"."<br>"; //Servicio de interes
	   $emess.= "Servicio de interés: ".$serviceselected."<br>"; //Servicio de interes
	   $emess.= "Comentarios adicionales: ".$usermessage."<br>"; //Mensaje complementario
       $subj = "Consulta de Servicios TechTeks"; //Asunto
       $mailsend = @mail("$myemail","$subj","$emess","$ehead");
      if ($mailsend){
		 header('Location: contact.html');
	  }
	  else{
		  header('Location: contact.html');
	  }
      
?>
