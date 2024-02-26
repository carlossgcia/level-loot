<?php
include "includes/sesion.php";
include "includes/conexion.php";
// Conexión con la base de datos. 
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <?php


    $sql = "DELETE FROM videojuegos WHERE id='$id'";
    if (mysqli_query($mysqli, $sql)) {
        echo "<script> window.location.href = 'admin.php'</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    ?>
</body>

</html>