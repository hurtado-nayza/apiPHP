<?php
    require_once("db.php");
    $query = "SELECT * FROM mis_contactos";
    $resultado = ObtenerRegistro($query);
    print_r($resultado);
?>