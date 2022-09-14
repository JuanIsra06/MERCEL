<?php

    $mysql_host = "localhost";
    $mysql_usuario = "root";
    $mysql_passwd = "";
    $mysql_bd = "proyecto_parcial1";

    $enlace = mysqli_connect($mysql_host, $mysql_usuario, $mysql_passwd, $mysql_bd);

    /*Comprobar conexion*/
    if(mysqli_connect_errno()){
       printf("Falló la conexión %s\n",mysqli_connect_errno());
        exit();
    }

    /* Codificaión de caracteres UTF8 */
    mysqli_set_charset($enlace, 'utf8');

?>