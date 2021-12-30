<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "quiz_hp";
    
    //ESTABLECER LA CONEXION CON EL SISTEMA DE GESTIÓN DE BASES DE DATOS
    $conexion = new mysqli($servidor, $usuario, $contraseña, $bd);

    if ($conexion -> connect_error) {
        die("Conexión fallida: " . $conexion -> connect_error);
    }
?>