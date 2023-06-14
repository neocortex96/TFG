<?php
// echo "El Titulo es : ". $_GET["titulo"]."<br>";
// echo "La Imagen es : ". $_GET["img"]."<br>";
// echo "El Texto es : ". $_GET["texto"]."<br>";

// require_once('../../back/php/back-queries.php');
// cargarPostCMS($_GET["titulo"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <!-- BOOTSTRAP CDN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIX POPOVERS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../css/cms.css">

</head>

<body>

    <!-- NAVBAR -->
    <nav class="barra-navegacion navbar navbar-expand-lg p-3 bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand text-light" href="#">LOGO</a>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar topics" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
            <div>
                <button title="modal" type="button" class="btn btn-primary-outline" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <input type="button" class="btn btn-primary" value="Iniciar sesión">
            </div>
        </div>
    </nav>

    <!-- POST BODY -->

    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">Título del artículo</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Start Bootstrap</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                    <div class="container text-end">
                        <a class="badge bg-primary text-decoration-none link-light mb-3" href="#">Likes (count)</a>
                    </div>

                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">Descripción del post. Un poco de lorem. Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Dicta accusamus illo ratione? Illum quam sed recusandae commodi possimus! Sed, fugiat? </p>

                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                            <!-- Comment with nested comments-->
                            <div class="d-flex mb-4">
                                <!-- Parent comment-->
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- FOOTER -->


    <div class="footer text-center container-fluid p-4 bg-dark text-white">
        <a data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Derechos de autor © 2023 Moon Star. Todos los derechos reservados.">
            Aviso de copyright</a>

        <a data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="En Moon Star, respetamos su privacidad y nos comprometemos a protegerla. Esta política explica cómo recopilamos, 
        utilizamos y protegemos la información personal que usted proporciona al visitar nuestro sitio web.">Política de privacidad</a>


        <a href="#">Mapa de sitio</a>

        <a data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Nos puede contactar a través de tlf: 673 227 637 | 615 73 04 22 o en nuestras redes sociales.">
            Información de contacto</a>

        <a href="https://twitter.com/mesut_senturk96" target=”_blank”><i class="bi bi-twitter"></i></a>
        <a href="https://instagram.com/visto0r_" target=”_blank”><i class="bi bi-instagram"></i></a>

    </div>
    <!-- BOOTSTRAP JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../js/cms.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        //Habilitar popovers
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        const popover = new bootstrap.Popover('.popover-dismiss', {
            trigger: 'focus'
        })
    </script>


</body>

</html>