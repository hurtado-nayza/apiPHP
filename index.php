<?php
    require_once("utilidades.php");

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $var = $_GET['url'];
        $number = intval(preg_replace('/[^0-9]+/', '', $var), 10);

        switch($var){
            case "contactos":
                $ans = allContactos();
                print_r( json_encode($ans));
            break;
            case "contactos/$number":
                $ans = idContactos($number);
                print_r( json_encode($ans));
            default;
        }

    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "POST";
        http_response_code(200);
    }else{
        http_response_code(405);
    }
?>