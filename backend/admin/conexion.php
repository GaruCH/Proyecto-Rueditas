<?php
    /*Declarar variables de conexión*/

    $server = "localhost"; //Tipo de servidor
    $user = "root"; //Usuario que se definio en los privilegos
    $password = ""; //
    $db = "rueditas"; // Base de Datos

    //Conexión a la BD
    $connect = mysqli_connect($server, $user, $password, $db); // TRUE : FALSE

    if (!$connect) {
        die('Error al conectar la base de datos '. mysqli_connect_error());
        exit;
    }//end if

    //La alerta es opcional
    // echo '<script> alert("Conexión éxitosa con la Base de Datos") </script>';

    mysqli_query($connect, 'SET NAMES utf8');
