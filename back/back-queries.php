<?php

function get_dbc(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bbdd-tfg";

    try {
        $conn = new mysqli($servername, $username, $password, $db);
        return $conn;
    } catch (\Exception $e) {
        echo "Error con la conexión a la BBDD";
        return $e;
    }
}





/*----------------- SQL QUERIES FOR: USERS TABLE ---------------------*/


function get_all_users(){
    try {
        $conn = get_dbc();
    } catch (\Exception $th) {
        echo "Error";
    }

}



?>