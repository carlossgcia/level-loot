<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Agregar Videojuego
    </title>
    <link rel="shortcut icon" href="img/logoVideojuegos-letras.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include "includes/headerAdmin.php";
    ?>

    <div class="container">
        <h1 class="text-center mt-5">Agregar Videojuego</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="agregar2.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-2">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="genero">Género:</label>
                        <input type="text" class="form-control" id="genero" name="genero" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="plataforma">Plataforma:</label>
                        <input type="text" class="form-control" id="plataforma" name="plataforma" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="desarrollador">Desarrollador:</label>
                        <input type="text" class="form-control" id="desarrollador" name="desarrollador" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="lanzamiento">Lanzamiento:</label>
                        <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="archivo">Imagen:</label>
                        <input type="file" class="form-control-file" id="archivo" name="archivo" accept="image/*"
                            required>
                    </div>
                    <button type="submit" class="mt-2 btn btn-primary btn-block">Agregar Videojuego</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>