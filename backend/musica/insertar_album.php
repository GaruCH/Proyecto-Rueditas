<?php
    include("../admin/conexion.php");

    //Capturar información
    $nombre_musica = $_POST['nombre_musica'];
    $nombre_album = $_POST['nombre_album'];
    $genero_album = $_POST['genero_album'];
    $descripcion_album = $_POST['descripcion_album'];
    $imagen_album = $_POST['imagen_album'];
    $link_spotify_musica = $_POST['link_spotify_musica'];
    $link_apple_musica = $_POST['link_apple_musica'];
    $id_artista = $_POST['id_artista'];

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

        $path = '../../img/albumes/'.$archivo["name"];

        if(move_uploaded_file($archivo["tmp_name"], $path)) {
            $nombre_archivo = $archivo["name"];
        }
    }

    $insert = "INSERT INTO musica VALUES(NULL,'$nombre_musica', '$nombre_album', '$genero_album', '$descripcion_album', '$nombre_archivo', '$link_spotify_musica', '$link_apple_musica', '$id_artista');";

    $query = mysqli_query($connect, $insert);

    if(!$query){
        mysqli_close($connect);
        echo '<script> alert("Ocurrio un error al insertar los datos de la música"); </script>';
    }
    else{
        mysqli_close($connect);
        echo '<script> alert("Los datos de la música han sido registrados de manera correcta"); </script>';
    }

    echo '<script> window.location="../../index.php" </script>';
?>
