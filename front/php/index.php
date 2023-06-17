<!DOCTYPE html>
<html lang="es">

<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIX POPOVERS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../css/index.css">
</head>

<?php
//include("./controller/index_control.php"); 
session_start();
require_once('../../back/php/back-queries.php');
require_once('../../back/php/user.php');
if (isset($_POST["iniciars"])) {
    conectarUsuario($_POST["email"], $_POST["pass"]);
    error_reporting(E_ERROR | E_PARSE);
    loadHeader(intval($_SESSION["role"]));
} else if (isset($_SESSION["logged"])) {
    loadHeader(intval($_SESSION["role"]));
} else
    loadHeader(1);
if (isset($_POST["registrar"])) {
    crearUsuario($_POST["email"], $_POST["username"], $_POST["password"]);
}

cargarCategorias();
cargarPost();
?>

<body>

    <!-- AL REGISTRARSE NOS SACA LA PANTALLA DE SUGERENCIAS (INTERESES) EN UN MINIDISPLAY CON CATEGORIAS RANDOM -->


    <!-- NAVBAR -->
    <script src="../js/headers.js"></script>


    <!-- SIDEBAR -->
    <div class="container d-flex flex-wrap col-xl-8">
        <div class="categorias rounded-0 list-group col-sm-12 col-md-6 col-xl-4" id="categ">
            <a href="#" class="fw-bold text-black bg-white border-light-subtle list-group-item list-group-item-action active p-3 fs-3" aria-current="true">
                Categorías
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-black text-white"> </a>


        </div>
        <div class="trending-today text-center bg-light p-3 col-sm-12 col-md-6 col-xl-8">
            <div class="fs-3 text-start fw-bold">Trending today</div>
            <div class="my-3 fs-5 items-trending" id="trentoday">
                <a href="#">Trending 1</a>
                <a href="#">Trending 2</a>
                <a href="#">Trending 3</a>
                <a href="#">Trending 4</a>
                <a href="#">Trending 5</a>
                <a href="#">Trending 6</a>
                <a href="#">Trending 7</a>
                <a href="#">Trending 8</a>
                <a href="#">Trending 9</a>
                <a href="#">Trending 10</a>

            </div>

            <div class="contenedor-cards container justify-content-center  d-flex flex-wrap" id="contenedor-cards">

                <!-- <div class="card" style="width: 18rem;">
                    <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> -->

            </div>
            <button class="btn text-decoration-underline p-1">Mostrar más</button>

        </div>
    </div>


    <!-- MODAL INICIO SESION / REGISTRO -->


    <div class="modal fade" id="exampleModal2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-5 bg-dark text-light">
                <form class="d-flex flex-column" method="post">
                    <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                    <h2 class="text-center p-4">INICIAR SESIÓN</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" size="35" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
                    </div>
                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-primary mx-2" name="iniciars" value="null">Enviar</button>
                        <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Cancelar</button>
                    </div>

                </form>

                <div class="modal-footer" style="border-top:0;">
                    <p><a href="#" class="link-opacity-75-hover" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Registrarse</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content p-5 bg-dark text-light">
                <form class="d-flex flex-column" method="post">
                    <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                    <h2 class="text-center p-4">REGISTRO</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" size="35" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

                    </div>
                    <div class="mb-3">
                        <label for="exampleUserName" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="exampleUserName" aria-describedby="userHelp" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" name="password">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mx-2" name="registrar">Enviar</button>
                        <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Cancelar</button>
                    </div>

                </form>
                <div class="modal-footer" style="border-top: 0;">
                    <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"></button> -->
                    <p><a href="#" class="link-opacity-75-hover" data-bs-target="#exampleModal2" data-bs-toggle="modal">Volver al inicio de sesion</a></p>

                </div>
            </div>
        </div>
    </div>

    <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button> -->



    <!-- FOOTER -->

    <div class="footer text-center container-fluid p-4 bg-dark text-white">
        <a data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Derechos de autor © 2023 Moon Star. Todos los derechos reservados.">
            Aviso de copyright</a>

        <a data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="En Moon Star, respetamos su privacidad y nos comprometemos a protegerla. Esta política explica cómo recopilamos, 
        utilizamos y protegemos la información personal que usted proporciona al visitar nuestro sitio web.">Política de privacidad</a>


        <a href="../php/mapasitio.php">Mapa de sitio</a>

        <a data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Nos puede contactar a través de tlf: 673 227 637 | 615 73 04 22 o en nuestras redes sociales.">
            Información de contacto</a>

        <a href="https://twitter.com/mesut_senturk96" target=”_blank”><i class="bi bi-twitter"></i></a>
        <a href="https://instagram.com/visto0r_" target=”_blank”><i class="bi bi-instagram"></i></a>

    </div>


    <!-- BOOTSTRAP JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script>
        //Habilitar popovers
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        const popover = new bootstrap.Popover('.popover-dismiss', {
            trigger: 'focus'
        })
    </script>



    <script src="../js/script.js"></script>



</body>

</html>