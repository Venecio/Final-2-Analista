<?php
class Conectar{
    public static function conexion(){    
        $conexion=new mysqli("localhost", "", "", "basephp"); //saque user y password
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
        
    }

}
?>
