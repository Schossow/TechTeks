<?php
    //CONEXION A LA BASE DE DATOS
    include('conexion.php');

    // INSERTAMOS LA NUEVA IP Y EL NUEVO ENLACE CREADO EN LA BASE DE DATOS <- SI LA IP YA EXISTE SOLO ACTUALIZA EN +1 LA CANTIDAD DE ENLACES CREADOS ->
    $sql_call = "INSERT INTO info_usuario (user_id,user_ip,enlaces_creados) VALUES (user_id=user_id+1,'".$actual_ip."',1) ON DUPLICATE KEY UPDATE user_id = user_id, enlaces_creados = enlaces_creados + 1";
    mysqli_query($db, $sql_call) or die("ERROR: Error en la base de datos al introducir las credenciales.");

    //SELECCIONAR EL NUMERO DE USUARIO SEGUN LA IP ACTUAL PROPORCIONADA PARA AGREGAR EL USER_ID DEL CREADOR DEL NUEVO ENLACE
    $sql_call = "SELECT ".$user_id. " FROM ".$tabla_usuario." WHERE ".$user_ip. " = '".$actual_ip. "'";
    $sql_result = mysqli_query($db, $sql_call) or die("ERROR: Error en la petición SQL");
    $query_user_id = mysqli_fetch_row($sql_result);
    
    //INSERTAR EL USER_ID DEL CREADOR DEL NUEVO ENLACE EN LA TABLA INFO_ENLACE
    $sql_call = "INSERT INTO ".$tabla_enlace." (".$creador_id.") VALUES ('".$query_user_id[0]."')";
    mysqli_query($db, $sql_call) or die("ERROR: Error en la base de datos al introducir los datos del enlace.");
