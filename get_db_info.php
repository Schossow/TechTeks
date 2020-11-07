<?php
include('conexion.php');
//SELECCIONAR LA CANTIDAD DE ENLACES CREADOS SEGUN EL ULTIMO ENLACE_ID
$sql_call = "SELECT ".$enlace_id." FROM ".$tabla_enlace." ORDER BY ".$enlace_id." DESC LIMIT 1";
$sql_result = mysqli_query($db, $sql_call) or die("Error en la petición SQL");
$query_user_id = mysqli_fetch_row($sql_result);
$enlaces_creados = $query_user_id[0];

//SELECCIONAMOS LA CANTIDAD DE USUARIOS CREADOS CON EL USER_ID
$sql_call = "SELECT ".$user_id. " FROM ".$tabla_usuario." ORDER BY ".$user_id." DESC LIMIT 1";
$sql_result = mysqli_query($db, $sql_call) or die("Error en la petición SQL");
$query_user_id = mysqli_fetch_row($sql_result);
$cantidad_usuarios = $query_user_id[0];

//FECHA DE CREACION DEL ENLACE MAS RECIENTE
$sql_call = "SELECT fecha_creacion FROM ".$tabla_enlace." WHERE fecha_creacion = (SELECT MAX(fecha_creacion) FROM ".$tabla_enlace.")";
$sql_result = mysqli_query($db, $sql_call) or die("Error en la petición SQL");
$query_user_id = mysqli_fetch_row($sql_result);
$last_mod = $query_user_id[0];