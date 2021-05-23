<?php   
class database
{
    public static function conectar()
    {
        $conexion = new mysqli("localhost","root","maria32","bdNombres");
        $conexion->query("SET NAME 'utf8");
        return $conexion;
    }

}
?>