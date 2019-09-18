<?php
    require_once("db.php");

    function allContactos(){
        $query = "SELECT * FROM contactos";
        $answer = ObtenerRegistro($query);
        return $answer; 
    }
?>