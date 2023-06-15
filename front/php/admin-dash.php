<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIX POPOVERS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<?php

include('../../back/php/back-queries.php');
require_once('../../back/php/user.php');
crearUsuarioAdmin();
loadHeader($s)
?>

<body>

    <body class="sb-nav-fixed">

        <script src="../js/headers.js"></script>


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Otros</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Inicio
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active border-bottom">Administrar usuarios</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button title="modal" data-bs-toggle="modal" data-bs-target="#modalCrearUsuario" type="button" class="btn btn-primary p-5">Crear usuario</button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button type="button" class="btn btn-warning p-5">Mostrar usuario</button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button title="modal" data-bs-toggle="modal" data-bs-target="#modalActualizarUsuario" type="button" class="btn btn-success p-5">Actualizar usuario</button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button title="modal" data-bs-toggle="modal" data-bs-target="#modalEliminarUsuario" type="button" class="btn btn-danger p-5">Eliminar usuario</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active border-bottom">Administrar artículos</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button type="button" class="btn btn-warning p-5">Mostrar artículo</button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button title="modal" data-bs-toggle="modal" data-bs-target="#modalActualizarArticulo" type="button" class="btn btn-success p-5">Actualizar artículo</button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <button title="modal" data-bs-toggle="modal" data-bs-target="#modalEliminarArticulo" type="button" class="btn btn-danger p-5">Eliminar artículo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


        <!-- MODALES USUARIO -->


        <div class="modal fade" id="modalCrearUsuario" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5 bg-dark text-light">
                    <form class="d-flex flex-column" method="post" action="">
                        <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                        <h2 class="text-center p-4">CREAR USUARIO</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                            <input type="email" size="35" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

                        </div>
                        <div class="mb-3">
                            <label for="exampleUserName" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="exampleUserName" aria-describedby="userHelp" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="passw">
                        </div>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="rol">
                            <option selected>Seleccione rol de usuario</option>
                            <option value='0'>Admin</option>
                            <option value='1'>Soporte</option>
                            <option value='2'>Usuario</option>
                        </select>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3" type="submit" name="confirm">Confirmar</button>
                            <button class="btn btn-danger mt-3" type="button" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalActualizarUsuario" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5 bg-dark text-light">
                    <form class="d-flex flex-column" method="post">
                        <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                        <h2 class="text-center p-4">ACTUALIZAR USUARIO</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                            <input type="email" size="35" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleUserName" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="exampleUserName" aria-describedby="userHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Seleccione rol de usuario</option>
                            <option value="0">Admin</option>
                            <option value="1">Mantenimiento</option>
                            <option value="2">Usuario</option>
                        </select>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3" type="button">Confirmar</button>
                            <button class="btn btn-danger mt-3" type="button" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="modal fade" id="modalEliminarUsuario" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5 bg-dark text-light">
                    <form class="d-flex flex-column">
                        <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                        <h2 class="text-center p-4">ELIMINAR USUARIO</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                            <input type="email" size="35" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3" type="button">Confirmar</button>
                            <button class="btn btn-danger mt-3" type="button" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- MODALES ARTICULOS -->

        <div class="modal fade" id="modalActualizarArticulo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5 bg-dark text-light">
                    <form class="d-flex flex-column">
                        <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                        <h2 class="text-center p-4">ACTUALIZAR ARTICULO</h2>
                        <div class="mb-3">
                            <label for="id_articulo" class="form-label">ID del artículo</label>
                            <input type="number" size="35" class="form-control" id="id_articulo" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="titulo_articulo" class="form-label">Título del artículo</label>
                            <input type="text" class="form-control" id="titulo_articulo" aria-describedby="userHelp">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label text-white">Imagen del artículo</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div class="mb-3">
                            <label for="desc_articulo" class="form-label">Descripción del artículo</label>
                            <textarea class="form-control" id="desc_articulo" aria-describedby="userHelp"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3" type="button">Confirmar</button>
                            <button class="btn btn-danger mt-3" type="button" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="modal fade" id="modalEliminarArticulo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5 bg-dark text-light">
                    <form class="d-flex flex-column">
                        <a href="#" class="text-end fs-3 text-white"> <i class="bi bi-x-lg " data-bs-dismiss="modal"></i></a>
                        <h2 class="text-center p-4">ELIMINAR ARTICULO</h2>
                        <div class="mb-3">
                            <label for="id_articulo" class="form-label">ID del artículo</label>
                            <input type="number" size="35" class="form-control" id="id_articulo" aria-describedby="emailHelp">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-3" type="button">Confirmar</button>
                            <button class="btn btn-danger mt-3" type="button" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <script src="../js/admin-dash.js"></script>




    </body>

</html>