<?php

function get_dbc()
{
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


// function addAPICategory(array|string|null $categories, array|string|null $descriptions) {
//     if(is_null($categories) || is_null($descriptions)) {
//         http_response_code(400);
//         return json_encode(array('errors' => 'No data provided'));
//     }
//     if(!is_array($categories)) $categories = array($categories);
//     if(!is_array($descriptions)) $descriptions = array($descriptions);
//     $data = array_map(function($v, $i) use($descriptions){
//         if(isset($v) && !is_null($v) && isset($descriptions[$i]) && !is_null($descriptions[$i])){
//             return array('id' => $v, 'desc' => $descriptions[$i]);
//         }
//     }, array_values($categories), array_keys($categories));
//     $apiResponse = addCategory($data);
//     if(isset($apiResponse['errors']) &&  sizeof($apiResponse['errors']) > 0) {
//         http_response_code(500);
//         return json_encode(array_slice($apiResponse, 0, 1), JSON_UNESCAPED_UNICODE );
//     }else if(is_null($apiResponse)) {
//         http_response_code(401);
//         return json_encode(array('errors' => array('Las categorías introducidas ya existen')), JSON_UNESCAPED_UNICODE );
//     }
//     return json_encode(array('msg' => "Categorías añadidas con éxito") , JSON_UNESCAPED_UNICODE );
// }

/*----------------- SQL QUERIES FOR: POST TABLE ---------------------*/

function cargarPost()
{
    try {
        $conn = get_dbc();

        $sql = "select titulo, texto, img_name from post";


        $result = mysqli_query($conn, $sql);
        if ($result) {
            // $resulta_json = json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_INVALID_UTF8_SUBSTITUTE);
            // mb_convert_encoding($result["img"] "UTF-8", "auto");
            $resulta_json = json_encode($result->fetch_all(MYSQLI_ASSOC));
            echo "<script> var res = {$resulta_json};</script>";
            // $resultadojs = $result ->fetch_all(MYSQLI_ASSOC);
            // echo "<script> var res = '".var_dump($resultadojs)."'</script>";
            // echo '["' . implode('", "', $resultadojs) . '"]' ;
            // echo "<script> var res = {$resultadojs}[titulo];</script>";
        }
    } catch (\Exception $th) {
        echo "No se han podido cargar los post" . $th;
    }
}


function cargarPostCMS($titulo)
{
    try {
        $conn = get_dbc();

        $sql = "SELECT username, titulo, texto, img_name, rating from post where titulo ='$titulo'";


        $result = mysqli_query($conn, $sql);
        if ($result) {

            $resulta_json = json_encode($result->fetch_all(MYSQLI_ASSOC));
            echo "<script> var res = {$resulta_json};</script>";

        }
    } catch (\Exception $th) {
        echo "No se han podido cargar los post" . $th;
    }
}

/*----------------- SQL QUERIES FOR: TOPICS TABLE ---------------------*/
function cargarCategorias()
{
    try {
        $conn = get_dbc();

        $sql = "select name from topics";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            $resulta_json = json_encode($result->fetch_all(MYSQLI_ASSOC));
            echo "<script> var cat = {$resulta_json};</script>";
        }
    } catch (\Exception $th) {
        echo "No se han podido cargar las categorías" . $th;
    }
}

/*----------------- SQL QUERIES FOR: USERS TABLE ---------------------*/
function crearUsuario()
{

    try {
        $conn = get_dbc();

        if (isset($_POST['user']) && isset($_POST['password'])) {
            $user = $_POST['user'];
            $id = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


            $query = "INSERT INTO 'users' (username ,email ,pass) VALUES('$user', ' $id ', '$password')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $msg = "Usuario registrado con éxito";
            } else
                $msg = "Usuario no registrado, asegúrese de usar un correo nunca usado o cambiar el nombre de usuario";
        }
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}

function verificarUsuario()
{

    try {
        $conn = get_dbc();

        if (isset($_POST['user']) && isset($_POST['password'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];


            $query = "SELECT username, pass from users where username = '$user' and pass='$password'";
            $result = mysqli_query($conn, $query);
            if (password_verify($password, $result["pass"])){
                $msg = "Coinciden";
            }else 
                $msg = "No coinciden, repita";
        }
    } catch (\Exception $th) {
        echo "Error durante la verificación del usuario" . $th;
    }
}



