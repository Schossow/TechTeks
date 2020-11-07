<?php
    
    $db_host = "localhost"; //SERVIDOR DE LA DB
    $db_username = "root"; //USUARIO DE LA DB
    $db_password = ""; //CONTRA DE LA DB
    $db_name = "links_history"; //NOMBRE DE LA DB
    
    $actual_ip = $_SERVER['REMOTE_ADDR']; //IP del usuario actual
    $user_ip = "user_ip"; //IP del usuario DB
    $tabla_usuario = "info_usuario"; // Variable que almacena los registros del usuario
    $tabla_enlace = "info_enlace"; // Variable que almacena los registros del enlace
    $user_id = "user_id"; // ID del usuario actual
    $enlace_id = "enlace_id"; //ID del enlace
    $creador_id = "creador_id"; //ID del creador del enlace

    $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("No se pudo conectar a la base de datos o el servidor no está disponible.");

    