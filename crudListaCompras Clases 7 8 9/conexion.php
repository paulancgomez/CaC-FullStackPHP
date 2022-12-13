<?php
function conexion(){
    $servidor = "localhost";
    $usuario = "root";
    $clave = "password";

    $baseDatos = "lista_compras";

    //conectar con el servidor
    $conectar = mysqli_connect($servidor, $usuario, $clave);
    //seleccionar la base de datos
    mysqli_select_db($conectar, $baseDatos);

    /*
    echo "<pre>";
    print_r($conectar);
    echo "</pre>";
    */

    return $conectar;

}




?>