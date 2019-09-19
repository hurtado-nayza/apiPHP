<?php
    require_once("db.php");

    function allContactos(){
        $query = "SELECT * FROM contactos";
        $answer = ObtenerRegistro($query);
        return convertirUTF8($answer); 
    }

    function idContactos($id){
        $query = "SELECT * FROM pais WHERE id_pais = $id";
        $answer = ObtenerRegistro($query);
        return convertirUTF8($answer); 
    }
?>