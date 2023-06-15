<?php

function loadHeader($s)
{
    if (!isset($_SESSION)) {
        echo "<script> us_value = $s </script>";
    }
}

function comprobar()
{   
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $header_value = $_SESSION['role'];
        loadHeader($header_value);
    } else {       
        $header_value = 1;
        loadHeader($header_value);
        header('Location: http://localhost:3000/front/php/index.php');
    }
}

function getUser(){

}