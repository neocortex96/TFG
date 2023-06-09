<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="../css/login-register.css">
</head>

<body>

    <div class="formulario bg-dark text-white">
    <button type="button" class="btn-close" aria-label="Close"></button>
        <form class="d-flex flex-column">
        <h2 class="text-center p-4">REGISTRO</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                <input type="email" size="35" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">No vamos a compartir su correo con nadie.</div> -->
            </div>
            <div class="mb-3">
            <label for="exampleUserName" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="exampleUserName" aria-describedby="userHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>


    <!-- BOOTSTRAP JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>



<?php

?>