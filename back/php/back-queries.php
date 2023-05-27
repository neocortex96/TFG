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

//img titulo text

function cargarPost(){
    try {
        $conn = get_dbc();

        $sql ="select titulo, texto, img from post";


        $result = mysqli_query($conn,$sql);

        // if ($result) {
        //     // Crear un array para almacenar los datos
        //     $datosPost = array();

        //     // Recorrer los resultados de la consulta
        //     while ($fila = $result->fetch_assoc()) {
        //         // Agregar los datos al array
        //         $datosPost[] = $fila;
        //     }

        if ($result) {
            $resultados_json = json_encode($result->fetch_all(MYSQLI_ASSOC));
            echo "<script>var resultados_js = {$resultados_json};</script>";

            // while ($i = $result->fetch_assoc()) {
            //     $post_arr = $i;
            //     $post_arr["img"] = base64_encode($post_arr["img"]);
                
            // //     $heredoc_a = <<<HEREA
            // //     <div class="container d-flex flex-wrap col-xl-8">
            // //     <div class="categorias rounded-0 list-group col-sm-12 col-md-6 col-xl-4">
            // //         <a href="#" class="fw-bold text-black bg-white border-light-subtle list-group-item list-group-item-action active p-3 fs-3" aria-current="true">
            // //             Categorías
            // //         </a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>
            // //         <a href="#" class="list-group-item list-group-item-action">Nombre de categoría</a>

            // //     </div>
            // //     <div class="trending-today text-center bg-light p-3 col-sm-12 col-md-6 col-xl-8">
            // //         <div class="fs-3 text-start fw-bold">Trending today</div>
            // //         <div class="my-3 fs-5 items-trending">
            // //             <a href="#">Trending 1</a>
            // //             <a href="#">Trending 2</a>
            // //             <a href="#">Trending 3</a>
            // //             <a href="#">Trending 4</a>
            // //             <a href="#">Trending 5</a>
            // //             <a href="#">Trending 6</a>
            // //             <a href="#">Trending 7</a>
            // //             <a href="#">Trending 8</a>
            // //             <a href="#">Trending 9</a>
            // //             <a href="#">Trending 10</a>

            // //         </div>

            // //         <div class="contenedor-cards container justify-content-center  d-flex flex-wrap">
            // //             <div class="card" style="width: 18rem;">
            // //                 <img src=data:image/jpg;charset=utf8;base64,$post_arr[img] class="card-img-top" alt="...">
            // //                 <div class="card-body">
            // //                     <h5 class="card-title">Card title</h5>
            // //                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            // //                     <a href="#" class="btn btn-primary">Go somewhere</a>
            // //                 </div>
            // //             </div>
            // //             <div class="card" style="width: 18rem;">
            // //                 <img src=data:image/jpg;charset=utf8;base64,$post_arr[img] class="card-img-top" alt="...">
            // //                 <div class="card-body">
            // //                     <h5 class="card-title">Card title</h5>
            // //                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            // //                     <a href="#" class="btn btn-primary">Go somewhere</a>
            // //                 </div>
            // //             </div>
            // //             <div class="card" style="width: 18rem;">
            // //                 <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
            // //                 <div class="card-body">
            // //                     <h5 class="card-title">Card title</h5>
            // //                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            // //                     <a href="#" class="btn btn-primary">Go somewhere</a>
            // //                 </div>
            // //             </div>
            // //             <div class="card" style="width: 18rem;">
            // //                 <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
            // //                 <div class="card-body">
            // //                     <h5 class="card-title">Card title</h5>
            // //                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            // //                     <a href="#" class="btn btn-primary">Go somewhere</a>
            // //                 </div>
            // //             </div>

            // //         </div>
            // //         <button class="btn text-decoration-underline p-1">Mostrar más</button>


            // //     </div>
            // // </div>
            // // HEREA;

            // //     echo $heredoc_a;
            // }
            // return $post_arr;
        }


    } catch (\Exception $th) {
       echo "No se han podido cargar los post". $th;
    }
}
