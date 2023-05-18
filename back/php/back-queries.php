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


// function get_all_users(){
//     try {
//         $conn = get_dbc();
//     } catch (\Exception $th) {
//         echo "Error";
//     }

// }


/*----------------- SQL QUERIES FOR: CATEGORIES TABLE ---------------------*/
/**
 *  ADD CATEGORIES GIVEN THROUGH ARRAY DATA
*/

function addCategory(){
    $array = [
        'Viajes',
        'Comida'
    ];
    return $array;
}

function addAPICategory(array|string|null $categories, array|string|null $descriptions) {
    if(is_null($categories) || is_null($descriptions)) {
        http_response_code(400);
        return json_encode(array('errors' => 'No data provided'));
    }
    if(!is_array($categories)) $categories = array($categories);
    if(!is_array($descriptions)) $descriptions = array($descriptions);
    $data = array_map(function($v, $i) use($descriptions){
        if(isset($v) && !is_null($v) && isset($descriptions[$i]) && !is_null($descriptions[$i])){
            return array('id' => $v, 'desc' => $descriptions[$i]);
        }
    }, array_values($categories), array_keys($categories));
    $apiResponse = addCategory($data);
    if(isset($apiResponse['errors']) &&  sizeof($apiResponse['errors']) > 0) {
        http_response_code(500);
        return json_encode(array_slice($apiResponse, 0, 1), JSON_UNESCAPED_UNICODE );
    }else if(is_null($apiResponse)) {
        http_response_code(401);
        return json_encode(array('errors' => array('Las categorías introducidas ya existen')), JSON_UNESCAPED_UNICODE );
    }
    return json_encode(array('msg' => "Categorías añadidas con éxito") , JSON_UNESCAPED_UNICODE );
}



?>