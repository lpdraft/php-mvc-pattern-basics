<?php
class DB{
    // Permite crear instancia a partir de una conexion
    private static $instancia = NULL;

    public static function crearInstancia(){
        if(!isset(self::$instancia)){
            // Si no existe la conexion, la creo pero con ciertos parametros del PDO
            // Try y Catch en una línea de código
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia = new PDO('mysql:host=localhost:3307;dbname=empleadosdb','root','',$opcionesPDO);

            // echo "Hay conexion con el MySQL";
        }
        return self::$instancia;
    }

}
?>