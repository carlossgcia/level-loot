<?php
include "includes/conexion.php";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="shortcut icon" href="img/logoVideojuegos-letras.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: rgba(78,130,219,0.07);">

    <?php
    include "includes/header.php";
    ?>


    <div class="container estructura mt-4 ">


        <div class="row forms">
            <div class="col-md-6">
                <h2 class="text-center m-4">Inicio de Sesión</h2>
                <form action="login2.php" method="post">
                    <div class="form-group mt-2">
                        <label for="loginUsuario">Nombre de usuario</label>
                        <input type="text" class="form-control" id="loginUsuario" name="loginUsuario"
                            placeholder="Ingrese su nombre de usuario">
                    </div>
                    <div class="form-group mt-2">
                        <label for="loginPassword">Contraseña</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword"
                            placeholder="Ingrese su contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100 mt-3">Iniciar Sesión</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="text-center m-4">Registro</h2>
                <form action="registro.php" method="post">
                    <div class="form-group mt-2">
                        <label for="registerUsuario">Nombre de usuario</label>
                        <input type="text" class="form-control" id="registerUsuario" name="registerUsuario"
                            placeholder="Ingrese su nombre de usuario">
                    </div>
                    <div class="form-group mt-2">
                        <label for="registerPassword">Contraseña</label>
                        <input type="password" class="form-control" id="registerPassword" name="registerPassword"
                            placeholder="Ingrese su contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100 mt-3">Registrarse</button>
                </form>
            </div>


        </div>
    </div>


    <?php
    include "includes/footer.php";
    ?>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>