<?php

function loadHeader($s)
{
    if (!isset($_SESSION['logged'])) {
        echo "<script> us_value = 1 </script>";
    } else {
        echo "<script> us_value = $s </script>";
    }
}



// function comprobar()
// {   
//     if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
//         $header_value = $_SESSION['role'];
//         loadHeader($header_value);
//     } else {       
//         $header_value = 1;
//         loadHeader($header_value);
//         header('Location: http://localhost:3000/front/php/index.php');
//     }
// }
function sessionDestroy()
{
    session_destroy();
}
