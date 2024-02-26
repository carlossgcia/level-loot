<?php
/* include 'includes/sesion.php'; */

include 'includes/conexion.php';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>


    <?php
    $usuario = $_POST["registerUsuario"];
    $password = $_POST["registerPassword"];

    $encriptada = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$encriptada')";

    // Comprobamos si el registro se ha guardado correctamente y en caso de error lo mostramos.
    if (mysqli_query($mysqli, $sql)) {


        echo "<script> window.location.href = 'admin.php'</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    ?>

</body>

</html>