<?php
include "includes/conexion.php";


$sql = "SELECT * FROM videojuegos";

$resultado = mysqli_query($mysqli, $sql);
$num_total_registros = mysqli_num_rows($resultado);




$tamanio_pagina = 6;    // Cambiar para ver mas o menos

if (isset($_GET["pagina"])) {

    $pagina = $_GET["pagina"];

    $inicio = ($pagina - 1) * $tamanio_pagina;
} else {

    $inicio = 0;
    $pagina = 1;
}

$total_paginas = ceil($num_total_registros / $tamanio_pagina);

// Hacemos la consulta sql indicando el limite de registros por página.
$sql = "SELECT * FROM videojuegos LIMIT " . $inicio . "," . $tamanio_pagina;

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

<body>
    <?php
    include "includes/header.php";
    ?>


    <div class=" container estructura mt-4" id="modelos">
        <div class="row">
            <div class="col-12 p-1">
                <form action="#" method="POST">
                    <input type="text" class="form-control form-control-lg" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-lg-6 col-md-6 col-12 p-1">
                <input type="number" class="form-control form-control-lg" name="precio_min" placeholder="Precio mínimo">
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-1">
                <input type="number" class="form-control form-control-lg" name="precio_max" placeholder="Precio máximo">
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-1">
                <input type="number" class="form-control form-control-lg" name="anio" placeholder="Año de lanzamiento">
            </div>

            <div class="col-lg-6 col-md-6 col-12 p-1">
                <input type="text" class="form-control form-control-lg" name="desarrollador"
                    placeholder="Desarrollador">
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-1">
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-success" value="Filtrar" name="enviar">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-1">
                <div class="d-grid gap-2">
                    <a class="btn btn-danger" href="catalogo.php">Reset</a>
                </div>
            </div>
            </form>
        </div>

        <div class="cards row align-items-center">
            <?php

            if (isset($_POST["enviar"])) {


                $nombre = $_POST["nombre"];
                $desarrollador = $_POST["desarrollador"];

                $precio_min = $_POST["precio_min"];
                $precio_max = $_POST["precio_max"];

                $anio = $_POST["anio"];


                if ($nombre == "") {
                    $nombre = "";
                }

                if ($precio_min == "") {
                    $precio_min = 0;

                }
                if ($precio_max == "") {
                    $precio_max = 10000000000;
                }

                if ($anio != "" && $precio_max == 10000000000 && $precio_min == 0 && $nombre == "") {
                    $sql = "SELECT * FROM videojuegos WHERE lanzamiento = '$anio'";
                } else {

                    $sql = "SELECT * FROM videojuegos WHERE nombre LIKE '%$nombre%' AND desarrollador LIKE '%$desarrollador%' AND precio BETWEEN '$precio_min' AND '$precio_max' OR lanzamiento = '$anio'";
                }

                /* ================================================ CONSULTA DEL FILTRO ========================================================================== */


                $resultado = mysqli_query($mysqli, $sql);


                if (mysqli_num_rows($resultado)) {

                    while ($fila = mysqli_fetch_assoc($resultado)) {


                        ?>
                        <div class="col-lg-4 col-md-6 col-12  mt-2">
                            <div class="card ">
                                <img src="img/videojuegos/<?php echo $fila["imagen"] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $fila["nombre"] ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $fila["descripcion"] ?>
                                    </p>
                                    <ul class="list-group list-group-flush">
                                        <strong>Precio: </strong>
                                        <li class="list-group-item">
                                            <?php echo $fila["precio"] ?>€
                                        </li>
                                        <strong>Plataforma: </strong>
                                        <li class="list-group-item">
                                            <?php echo $fila["plataforma"] ?>
                                        </li>
                                        <strong>Genero: </strong>
                                        <li class="list-group-item">
                                            <?php echo $fila["genero"] ?>
                                        </li>
                                        <strong>Fecha de Lanzamiento: </strong>
                                        <li class="list-group-item">
                                            <?php echo $fila["lanzamiento"] ?>
                                        </li>
                                    </ul>

                                </div>

                                <div class="card-footer text-bg-secondary">
                                    <p class="card-text">
                                        <?php echo $fila["desarrollador"] ?>
                                    </p>
                                </div>
                            </div>

                        </div>


                        <?php
                    }
                    ?>
                </div>
                <?php
                } else {
                    echo "<h1> Sin resultados </h1>";
                }

            } else {



                $sql = "SELECT * FROM videojuegos LIMIT " . $inicio . "," . $tamanio_pagina;

                $resultado = mysqli_query($mysqli, $sql);

                if (mysqli_num_rows($resultado)) {

                    while ($fila = mysqli_fetch_assoc($resultado)) {

                        ?>

                    <div class="cards row align-items-center">
                        <?php

                        if ($resultado = mysqli_query($mysqli, $sql)) {


                            while ($fila = mysqli_fetch_array($resultado)) {

                                ?>
                                <div class="col-lg-4 col-md-6 col-12  mt-2">
                                    <div class="card ">
                                        <img src="img/videojuegos/<?php echo $fila["imagen"] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <?php echo $fila["nombre"] ?>
                                            </h5>
                                            <p class="card-text">
                                                <?php echo $fila["descripcion"] ?>
                                            </p>
                                            <ul class="list-group list-group-flush">
                                                <strong>Precio: </strong>
                                                <li class="list-group-item">
                                                    <?php echo $fila["precio"] ?>€
                                                </li>
                                                <strong>Plataforma: </strong>
                                                <li class="list-group-item">
                                                    <?php echo $fila["plataforma"] ?>
                                                </li>
                                                <strong>Genero: </strong>
                                                <li class="list-group-item">
                                                    <?php echo $fila["genero"] ?>
                                                </li>
                                                <strong>Fecha de Lanzamiento: </strong>
                                                <li class="list-group-item">
                                                    <?php echo $fila["lanzamiento"] ?>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="card-footer text-bg-secondary">
                                            <p class="card-text">
                                                <?php echo $fila["desarrollador"] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <?php
                            }

                            // Comprobamos si hay más de una página, para mostrar o no la paginación.
                            if ($total_paginas > 1) {
                                ?>
                                <nav class="mt-4">
                                    <ul class="pagination justify-content-center">
                                        <?php
                                        // Con un bucle for creamos los enlaces de paginación.
                                        for ($i = 1; $i <= $total_paginas; $i++) {
                                            // En la página en la que estamos vamos a mostrar el enlace con la clase "active" de Bootstrap para diferenciar el elemento activo del resto.
                                            if ($pagina == $i) {
                                                echo "<li class='page-item active'><a class='page-link disabled' href='catalogo.php?pagina=" . $i . "'>" . $i . "</a></li>";
                                            } else {
                                                // Creamos el enlace a cada página sin la clase active.
                                                echo "<li class='page-item'><a class='page-link' href='catalogo.php?pagina=" . $i . "'>" . $i . "</a></li>";
                                            }
                                        }
                                        ?>
                                    </ul>
                                </nav>
                                <?php
                            }

                        } else {
                            echo "<h1> Sin resultados </h1>";
                        }
                    }

                    ?>


                    <?php
                }
            }

            ?>
        </div>






    </div>
    </div>
    <?php
    include "includes/footer.php";
    ?>

</body>

</html>