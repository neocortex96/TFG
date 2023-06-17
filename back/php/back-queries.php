<?php
error_reporting(E_ERROR | E_PARSE);
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
/*----------------- ADMIN ---------------------*/

function mostrarArticuloAdmin($id)
{
    try {
        $conn = get_dbc();
        if($id){
            $p_id = $id;
            $query = "select * from post where p_id='$p_id '";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $postinfo = json_encode($result->fetch_all(MYSQLI_ASSOC));
                echo "<script> var postinfo = {$postinfo};</script>";
            } else{
                echo "No existe un POST con esta id: "+$id;
            }   
        }
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}

function updateArticuloPost($id, $titulo, $img, $desc)
{
    try {
        $conn = get_dbc();
                $query = "update post set titulo='$titulo', img_name='$img', texto='$desc' where p_id='$id'";
                $result = mysqli_query($conn, $query);
                if ($result > 0) {
                    echo "Post actualizado";
                } else
                    echo "El post no existe!";
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario";

    }
}

function eliminarArticuloAdmin($id)
{
    // DELETE FROM users WHERE `users`.`email` = 'kaisyouamv@gmail.com' AND `users
    try {
        $conn = get_dbc();
            if ($id) {
                $p_id = $id;
                $query = "delete from post where p_id='$id'";
                $result = mysqli_query($conn, $query);
                if($result === true) {
                    echo "Post eliminado exitosamente";
                }
            }
        
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}


/*----------------- ClientSide ---------------------*/
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
        // 
        // 
        // SELECT topics.name from post join topics on post.id_topic = topics.id_topic where post.id_topic=0;
        // $sql = "SELECT username, titulo, texto, img_name, rating from post where titulo ='$titulo'";
        $sql = "SELECT username, titulo, texto, img_name, rating, topics.name from post join topics on post.id_topic = topics.id_topic where titulo ='$titulo'";


        $result = mysqli_query($conn, $sql);
        if ($result) {

            $resulta_json = json_encode($result->fetch_all(MYSQLI_ASSOC));
            echo "<script> var res = {$resulta_json};</script>";
        }
    } catch (\Exception $th) {
        echo "No se han podido cargar los post" . $th;
    }
}

function cargarPostProfile($username)
{
    try {
        $conn = get_dbc();

        $sql = "select titulo, texto, img_name from post where username = '$username'";

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

/*----------------- ADMIN ---------------------*/
function crearUsuarioAdmin()
{

    try {
        $conn = get_dbc();
        if (isset($_POST['confirm'])) {
            if (isset($_POST['username']) && isset($_POST['passw']) && isset($_POST['email']) && isset($_POST['rol'])) {
                $user = $_POST['username'];
                $id = $_POST['email'];
                $password = password_hash($_POST['passw'], PASSWORD_DEFAULT);
                $role = strval($_POST['rol']);

                echo $role;

                $query = "insert into users (username ,email ,pass, role) values ('$user','$id' , '$password', '$role')";
                $result = mysqli_query($conn, $query);
                if ($result > 0) {
                    echo "<script> var very = true;</script>";
                    
                } else
                    echo "Usuario no registrado, asegúrese de usar un correo nunca usado o cambiar el nombre de usuario";
            }
        }
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario";

    }
}

function mostrarUsuarioAdmin($user)
{
    try {
        $conn = get_dbc();
            if ($user) {
                $mail = $user;
                $query = "select * from users where email='$mail'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $user_info = json_encode($result->fetch_all(MYSQLI_ASSOC));
                    echo "<script> var cat = {$user_info};</script>";
                } else{
                    $user_info_un = [
                        "username" => "NOT FOUND",
                        "email" => "NOT FOUND",
                        "pass" => "NOT FOUND",
                        "reg_date"  => "NOT FOUND", 
                        "role"  => "NOT FOUND"
                    ];
                    $encoded = json_encode($user_info_un);
                    echo "<script> var cat = {$encoded};</script>";
                }   
            }
        
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}

function eliminarUsuarioAdmin($user)
{
    // DELETE FROM users WHERE `users`.`email` = 'kaisyouamv@gmail.com' AND `users
    try {
        $conn = get_dbc();
            if ($user) {
                $mail = $user;
                $query = "delete from users where email='$mail'";
                $result = mysqli_query($conn, $query);
                if($result === true) {
                    echo "Usuario eliminado exitosamente";
                }
            }
        
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}

function updateUsuarioAdmin($correo, $nombre, $contrase, $rol)
{
    try {
        $conn = get_dbc();
                $password = password_hash($contrase, PASSWORD_DEFAULT);
                $rol = strval($rol);
                $query = "update users set username='$nombre', pass='$password', role='$rol' where email='$correo'";
                $result = mysqli_query($conn, $query);
                if ($result > 0) {
                    echo "Usuario actualizado";
                } else
                    echo "Usuario no registrado, asegúrese de usar un correo nunca usado o cambiar el nombre de usuario";
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario";

    }
}
/*----------------- CLIENT ---------------------*/
function verificarUsuario($email, $pass)
{

    try {
        $conn = get_dbc();

        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                return (password_verify($pass, $row["pass"]));
            }
        } else {
            echo "Sin resultados, no existe el usuario.";
        }
    } catch (\Exception $th) {
        echo "Error durante la verificación del usuario" . $th;
    }
}

function cargarUser($name)
{
    try {
        $conn = get_dbc();

        $sql = "select * from users where username = '$name'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $resulta_users = json_encode($result->fetch_all(MYSQLI_ASSOC));
            echo "<script> var cat = {$resulta_users};</script>";
        }
    } catch (\Exception $th) {
        echo "No se han podido cargar las categorías" . $th;
    }
}

function crearUsuario()
{

    try {
        $conn = get_dbc();
        if (isset($_POST['confirm'])) {
            if (isset($_POST['username']) && isset($_POST['passw']) && isset($_POST['email'])) {
                $user = $_POST['username'];
                $id = $_POST['email'];
                $password = password_hash($_POST['passw'], PASSWORD_DEFAULT);
                $query = "insert into users (username ,email ,pass, role) values ('$user','$id' , '$password','3')";
                // $query = "insert into users (username ,email ,pass, role) values ('yo',  'yo@yo' , 'yoyo', '0')";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo "Usuario registrado con éxito";
                } else
                    echo "Usuario no registrado, asegúrese de usar un correo nunca usado o cambiar el nombre de usuario";
            }
        }
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}

function conectarUsuario($email, $pass)
{

    try {
        $conn = get_dbc();
        // if (isset($_POST['iniciars'])) {
        if (isset($email) && isset($pass)) {
            if (verificarUsuario($email, $pass) == true) {
                session_start();
                $email1 = $email;
                $sql = "select * from users where email = '$email1'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) >= 1) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION["logged"] = true;
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["registro"] = $row["reg_date"];
                        $_SESSION["role"] = $row["role"];
                    }
                } else {
                    echo "Sin resultados, no existe el usuario.";
                }
            }
        }
        // }
    } catch (\Exception $th) {
        echo "Error durante la creación del usuario" . $th;
    }
}

