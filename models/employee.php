<?php

class Employee{
    // Consultar la Ifo de DB para poder almacenar esos datos como parte de la Classe
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email)
        {
            $this->id=$id;
            $this->name=$name;
            $this->email=$email;
        }
    // Una vez que tenemos el constructor, dicha consulta se crea a partir de Objeto
    public static function readDB(){
        $listEmployees = [];
        $connectDB = DB::crearInstancia();
        $sql = $connectDB -> query("SELECT * FROM empleados");

        // Recuparar la info consultada
        foreach($sql -> fetchAll() as $employee){
            // Put DB data into emty array
            $listEmployees[]= new Employee($employee['id'],$employee['nombre'],$employee['correo']);
        }
        return $listEmployees;
    }

    public static function create($name, $email){
        $connectDB = DB::crearInstancia();

        $sql = $connectDB -> prepare("INSERT INTO empleados(nombre, correo) VALUES (?,?)"); 
        // Recibos los datos desde from en un arreglo
        $sql -> execute(array($name, $email));
    }

     public static function remove($id){
         $connectDB = DB::crearInstancia();
         $sql = $connectDB -> prepare("DELETE FROM empleados WHERE id=?");
         $sql -> execute(array($id));
     }


     public static function update($id){
         $connectDB = DB::crearInstancia();

         $sql = $connectDB -> prepare("SELECT * FROM empleados WHERE id=?");
         $sql -> execute(array($id));
         $employee = $sql -> fetch();

        #Send current employee data, same id in GET
        return new Employee($employee['id'],$employee['nombre'],$employee['correo']);
     }

     public static function updateInfo($id,$name, $email){
          $connectDB = DB::crearInstancia();

          $sql = $connectDB -> prepare("UPDATE empleados SET nombre=?, correo=? WHERE id=?");
        $sql -> execute(array($name, $email, $id));
     }

}


?>