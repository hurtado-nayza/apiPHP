<?php
    $server="127.0.0.1";
    $user="root";
    $password="";
    $database="mis_contactos";
    $port="3306";

    $conexion= new mysqli($server,$user,$password,$database,$port);
    if($conexion->connect_error)
        die($conexion->connect_error);


    //guardar, modificar, eliminar
    function NonQuery($sqlstr, $conexion = null){
        if(!$conexion)global $conexion;
        $result = $conexion->query($sqlstr);
        return $conexion->affected_rows;
    }

    //select
    function ObtenerRegistro($sqlstr, $conexion = null){
        if(!$conexion)global $conexion;
        $result = $conexion->query($sqlstr);
        $resultarray = array();
        foreach($result as $registro){
            //$resultarray[] = $registro;
            array_push($resultarray, $registro);
        }
        return $resultarray;
        
    }

    //utf-8
    function convertirUTF8($array){
        array_walk_recursive($array,function($item, $key){
            if(!mb_detect_encoding($item,'utf-8',true)){
                $item = utf8_encode($item);
            }
        });
        return $array;
    }
?>