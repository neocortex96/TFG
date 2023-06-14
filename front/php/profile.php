<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="../css/profile.css">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="user-select-none">
    <!-- NAVBAR -->
    <nav class="barra-navegacion navbar navbar-expand-lg bg-dark p-3">
        <div class="container-fluid">

            <a class="navbar-brand text-light" href="#">LOGO</a>

            <form class="d-flex" role="search" id="buscador-navbar">
                <input class="form-control me-2" type="search" placeholder="Buscar topics" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
            <div class="d-flex align-items-center" id="navbar-iconos-derecha">
                <button title="modal" type="button" class="btn btn-primary-outline" data-bs-toggle="modal"data-bs-target="#exampleModal">
                    <i type="button" class="bi bi-cloud-upload fs-1 text-primary"></i>
                </button>
                <button type="button" class="btn btn-primary mx-3">Chat</button>
                <!-- <a href="#"><i class="bi bi-cloud-upload fs-1 text-primary" id="subirPost"></i></a> -->
                <a href="#"><i class="bi bi-person-circle fs-1 text-primary mx-3"></i></a>
            </div>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="list-group text-light text-center rounded-0 d-flex align-items-center">
            <a href="#" class="list-group-item list-group-item-action">Chat</a>
            <a href="#" class="list-group-item list-group-item-action">Crear un post</a>
            <a href="#" class="list-group-item list-group-item-action">Mi perfil</a>
            <a href="#" class="list-group-item list-group-item-action">Cerrar sesión</a>
        </div>
    </div>


    <!-- CREARCION DE POST -->

    <style>
        .miFormulario h2 {
            color: white;
        }

        .miFormulario {
            /* display: none; */
            /* position: absolute; */
            /* z-index: 1; */
            margin-top: 5em;
            margin-left: 37%;
            margin-right: 37%;
            padding: 3em;
            border-radius: 15px;
        }
    </style>
    <!-- 
    <div class="miFormulario formulario bg-dark" id="miFormulario">
        <form class="d-flex flex-column">
            <h2 class="text-center p-4">CREACIÓN POST</h2>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="mb-3 form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descripción</label>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label text-white">Imagen descriptiva</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <button type="button" class="btn btn-primary">Crear</button>
        </form>
    </div> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h1 class="modal-title text-white fs-5" id="exampleModalLabel">CREACIÓN POST</h1>
                </div>
                <div class="modal-body">
                    <form class="d-flex flex-column">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Descripción</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label text-white">Imagen descriptiva</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0 align-self-center">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Confirmar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- DATOS DEL USUARIO -->

    <div class="container-fluid datos-contenedor-global d-flex flex-wrap col-xs-10 col-md-10 col-xl-10 p-3"
        id="datos-usuario">
        <div class="container columna-imagen d-flex flex-wrap justify-content-center col-xs-4 col-md-2 col-xl-2">
            <img id="mi-imagen" src="../files/images/pp-placeholder.png" alt="placeholder-pp">
            <a href="#">
        </div>
        <div class="container d-flex flex-wrap col-xs-8 col-md-10 col-xl-10" id="contenedor-nombre">
            <a href="#">
                <h3 class="border-end" id="nombre-usuario">Nombre de usuario</h3>
            </a>
            <a href="#">
                <h3 class="mx-3" id="miembro-desde">Miembro desde</h3>
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quasi incidunt omnis
                nulla accusantium sint
                sit inventore odio at ducimus. Officia est sit aspernatur repudiandae sunt facere id quod. Dolores.</p>

        </div>


    </div>

    <div class="container-fluid d-flex col-xl-10">
        <h4 class="p-3">Topics suscritos</h4>

        <div class="container-fluid d-flex col-xl-5 align-items-center p-3">
            <div class="dropdown mx-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Ordenar por categorías
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    Mostrar todos
                </label>
            </div>
        </div>
        <div class="container-fluid d-flex col-5 align-items-center p-3 justify-content-end">
            <input type="checkbox" class="btn-check mx-3" id="btn-check-outlined" autocomplete="off">
            <label class="btn btn-outline-primary mx-3" for="btn-check-outlined">Suscripciones</label><br>
            <input type="checkbox" class="btn-check mx-3" id="btn-check-2-outlined" checked autocomplete="off">
            <label class="btn btn-outline-primary mx-3" for="btn-check-2-outlined">Creados por ti</label><br>
        </div>
    </div>




    <div class="container col-xl-10 my-3">
        <div class="row">
            <div class="card col-12 col-md-5 col-xl-2 px-0 mx-3 ">
                <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-danger">Eliminar suscripción</a>
                </div>
            </div>
            <div class="card col-12 col-md-5 col-xl-2 px-0 mx-3">
                <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-danger">Eliminar suscripción</a>
                </div>
            </div>
            <div class="card col-12 col-md-5 col-xl-2 px-0 mx-3">
                <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-danger">Eliminar suscripción</a>
                </div>
            </div>
            <div class="card col-12 col-md-5 col-xl-2 px-0 mx-3">
                <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-danger">Eliminar suscripción</a>
                </div>
            </div>
            <div class="card col-12 col-md-5 col-xl-2 px-0 mx-3">
                <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-danger">Eliminar suscripción</a>
                </div>
            </div>
            
            

            
        </div>
    </div>




    <div class="container-fluid d-flex justify-content-center col-xl-10">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
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
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="../js/profile.js"></script>
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