<?php
    include("../admin/conexion.php");

    //Capturar información
    $nombre = $_POST['nombre_artista'];
    $ap = $_POST['apellido_paterno_artista'];
    $am = $_POST['apellido_materno_artista'];
    $nacionalidad = $_POST['nacionalidad_artista'];
    $apodo = $_POST['apodo_artista'];
    $biografia = $_POST['biografia_artista'];
    $imagen = $_POST['imagen_artista'];

    $archivo = $_FILES['foto'];
    $nombre_archivo = 'NULL';

    if (!empty($archivo['name'])) {
        $temp = explode(".", $archivo["name"]);
        $extension = end($temp);

        if (($extension != "png") && ($extension != "jpg") && ($extension != "jpeg")) {
            mysqli_close($connect);
            echo    '<script> 
                        alert("Debe subir una archivo con la extensión jpg|jpeg|png"); 
                    </script>';
        }

        $path = '../../img/artistas/'.$archivo["name"];

        if(move_uploaded_file($archivo["tmp_name"], $path)) {
            $nombre_archivo = $archivo["name"];
        }
    }

    $insert = "INSERT INTO artista VALUES(NULL,'$nombre', '$ap', '$am', '$nacionalidad', '$apodo', '$biografia', '$nombre_archivo');";

    $query = mysqli_query($connect, $insert);

    if(!$query){
        mysqli_close($connect);
        echo '<script> alert("Ocurrio un error al insertar los datos del artista"); </script>';
    }
    else{
        mysqli_close($connect);
        echo '<script> alert("Los datos del artista han sido registrados de manera correcta"); </script>';
    }

    echo '<script> window.location="../../index.php" </script>';
?>
