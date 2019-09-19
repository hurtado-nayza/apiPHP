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

    function crearContactos($array){
        $email = $array[0]['email'];
        $nombre = $array[0]['nombre'];
        $sexo = $array[0]['sexo'];
        $nacimiento = $array[0]['nacimiento'];
        $pais = $array[0]['pais'];
        $imagen = $array[0]['imagen'];

        $query = "INSERT INTO contactos(email,nombre,sexo,nacimiento,pais,imagen) VALUES ('$email', '$nombre', '$sexo','$nacimiento','$pais','$imagen')";
        NonQuery($query);
        return true;

    }
?>