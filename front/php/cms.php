<?php
    echo "El Titulo es : ". $_GET["titulo"]."<br>";
    echo "La Imagen es : ". $_GET["img"]."<br>";
    echo "El Texto es : ". $_GET["texto"]."<br>";

    require_once('../../back/php/back-queries.php');
    cargarPostCMS($_GET["titulo"]);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="div1"></div>
<script src="../js/cms.js"></script>
</body>
</html>
