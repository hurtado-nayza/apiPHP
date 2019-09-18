<?php
    require_once("utilidades.php");

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $var = $_GET['url'];

        switch($var){
            case "contactos":
                $ans = allContactos();
                print_r( json_encode($ans));
            break;
            default;
        }

    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "POST";
        http_response_code(200);
    }else{
        http_response_code(405);
    }
?>