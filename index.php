<?php
    require_once("db.php");
    $query = "SELECT * FROM contactos";
    $resultado = ObtenerRegistro($query);
    print_r($resultado);
?>