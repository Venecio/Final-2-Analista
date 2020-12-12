<?php
class Conectar{
    public static function conexion(){    
        $conexion=new mysqli("localhost", "Venecio", "2277", "basephp");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}
?>