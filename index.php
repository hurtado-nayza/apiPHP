<?php
    require_once("utilidades.php");

    if(isset($_GET['url'])){
        $var = $_GET['url'];

        if($_SERVER['REQUEST_METHOD']=='GET'){
            $number = intval(preg_replace('/[^0-9]+/', '', $var), 10);

            switch($var){
                case "contactos":
                    $ans = allContactos();
                    print_r( json_encode($ans));
                    http_response_code(200);
                break;
                case "contactos/$number":
                    $ans = idContactos($number);
                    print_r( json_encode($ans));
                    http_response_code(200);
                default;
            }

        }else if($_SERVER['REQUEST_METHOD']=='POST'){
            $postBody = file_get_contents("php://input");
            $convert = json_decode($postBody, true);
            if(json_last_error()==0){
                switch($var){
                    case "contactos":
                        crearContactos($convert);
                        http_response_code(200);
                    break;
                    default;
                }
            }else{
                http_response_code(400);
            }

        }else{
            http_response_code(405);
        }
    }else{?>
        <link rel="stylesheet" href="public/estilos.css">
        <div class="container">
            <h1>METADATA</h1>
            <div class="divbody">
                <p>Productos</p>
                <code>POST /contactos</code>
                <code>GET /contactos</code>
                <code>GET /contactos/$id</code>
            </div>
        </div>

<?php
    }
?>