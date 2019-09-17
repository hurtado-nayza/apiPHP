<?php
    /*require_once("db.php");
    $query = "SELECT * FROM contactos";
    $resultado = ObtenerRegistro($query);
    print_r($resultado);*/

    if($_SERVER['REQUEST_METHOD']=='GET'){
        echo "GET";
        http_response_code(200);
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "POST";
        http_response_code(200);
    }else{
        http_response_code(405);
    }
?>