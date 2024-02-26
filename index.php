<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Level loot</title>
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

    <!-- Carrousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide mt-3" data-bs-ride="carousel">


        <div class="carousel-inner">


            <div class="carousel-item active">
                <img src="img/slider/resident_evil_village.jpg" class="img  " alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/call_of_duty_warzone.jpg" class="img  " alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/witcher_3.jpg" class="img  " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Carrousel -->

    <main class="falso">



        <div class="container inicial estructura p-3" id="sobre_nosotros">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12 ">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-12">
                            <h1>
                                Level loot
                            </h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <p>
                                Bienvenido a nuestra <strong>tienda de videojuegos</strong>, donde la emoción del
                                <strong>gaming</strong> cobra vida tanto
                                en nuestro espacio físico como en nuestra <strong> plataforma online</strong>. Explora
                                nuestro extenso
                                catálogo que abarca desde los clásicos atemporales hasta los lanzamientos más recientes.
                                Desde la comodidad de tu hogar, disfruta de reservas, compras y <strong>ofertas
                                    exclusivas</strong>. Nuestro compromiso
                                va más allá con un gran equipo de expertos está listo para brindarte
                                atención personalizada, recomendaciones y acceso a promociones especiales. Únete a
                                nuestra comunidad de apasionados por los <strong>videojuegos</strong> y descubre una
                                nueva dimensión en
                                la <strong>experiencia gamer</strong>. ¡Bienvenido a la revolución digital de la
                                diversión!

                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mt-2 align-items-center btn-cat">
                                <a class="lista btn btn-primary" href="catalogo.php">
                                    Ver Catalogo
                                </a>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mt-2 align-items-center btn-cat">
                                <a class="lista btn btn-primary" href="#ofertas">
                                    Promociones
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row justify-content-center">
                        <div class="imagen-portada">
                            <img src="img/logoVideojuegos-sinfondo.png" alt="" class="img">

                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="container-fluid estructura bento-prom">
            <h1 class="text-center" id="ofertas">Promociones</h1>
            <div class="row fila1">
                <div class="col-md-5 item item1">
                    <h2>Disfruta solo o en compañía</h2>
                </div>
                <div class="col-md-7 item">
                    <div class="row fila3">
                        <div class="col-md-3 item item2"></div>
                        <div class="col-md-6 item item3">
                            <h2>Especialistas en arcades</h2>
                        </div>
                        <div class="col-md-3 item item4">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row fila2">
                <div class="col-md-6 item item6" ></div>
                <div class="col-md-6 item item7" >
                    <h2>Tenemos ofertas en experiencias gaming</h2>
                </div>
            </div>
        </div>


        <div class="container formulario-contacto mt-2" id="contacto">
            <!-- Encabezado -->

            <h1>Contacto</h1>
            <p>¡Contáctanos para obtener más información!</p>


            <!-- Formulario de Contacto -->
            <form id="contactForm" class="">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa tu nombre.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa una dirección de correo electrónico válida.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                    <div class="invalid-feedback">
                        Por favor, ingresa tu mensaje.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>

    </main>


    <?php
    include "includes/footer.php";
    ?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


</html>