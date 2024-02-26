<?php
include 'includes/sesion.php';

include 'includes/conexion.php';


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $genero = $_POST["genero"];
    $plataforma = $_POST["plataforma"];
    $desarrollador = $_POST["desarrollador"];
    $lanzamiento = date("Y", strtotime($_POST["lanzamiento"]));

    $archivo_nombre = $_FILES["archivo"]["name"];
    $archivo_ruta_temporal = $_FILES["archivo"]["tmp_name"];


    $ruta_completa = pathinfo($archivo_nombre);

    $nombre_sin_extension = $ruta_completa['filename'];


    $extension = $ruta_completa['extension'];


    if (file_exists("img/videojuegos/" . $archivo_nombre)) {

        $contador = 1;

        while (file_exists("img/videojuegos/" . $archivo_nombre)) {

            $archivo_nombre = $nombre_sin_extension . $contador . "." . $extension;
            $contador++;
        }
        if (move_uploaded_file($archivo_ruta_temporal, "img/videojuegos/" . $archivo_nombre)) {
            echo "El archivo ha sido guardado correctamente.";
            echo "<br>";
            echo "El archivo se guardó como: " . $archivo_nombre;
            echo "<br>";
            echo "<img src='img/videojuegos/" . $archivo_nombre . "'>";

        } else {
            echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
        }
    } else {

        if (move_uploaded_file($archivo_ruta_temporal, "img/videojuegos/" . $archivo_nombre)) {

            echo "todo bien";
            echo $archivo_nombre;


        } else {
            echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
        }
    }



    $sql = "INSERT INTO videojuegos (nombre, descripcion, precio, genero, plataforma, desarrollador, lanzamiento, imagen) 
    VALUES ('$nombre','$descripcion','$precio','$genero','$plataforma', '$desarrollador', '$lanzamiento', '$archivo_nombre')";
    echo "<br>";
    echo $sql;
    // Comprobamos si el registro se ha guardado correctamente y en caso de error lo mostramos.
    if (mysqli_query($mysqli, $sql)) {
        echo "Registro guardado correctamente";
        echo "<br>";
        echo "<script> window.location.href = 'admin.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }



    ?>
</body>

</html>