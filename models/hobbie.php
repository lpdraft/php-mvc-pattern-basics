<?php

class Hobbie{
    // Consultar la Ifo de DB para poder almacenar esos datos como parte de la Classe
    public $id;
    public $name;
    public $type;

    public function __construct($id, $name, $type)
        {
            $this->id=$id;
            $this->name=$name;
            $this->type=$type;
        }

    // Una vez que tenemos el constructor, dicha consulta se crea a partir de Objeto
    public static function consultar(){
        $listHobbies = [];

        $connectDB = DB::crearInstancia();
        $sql = $connectDB -> query("SELECT * FROM hobbies");

        // Recuparar la info consultada
        foreach($sql -> fetchAll() as $hobbie){
            $listHobbies[]= new Hobbie($hobbie['id_hobbie'],$hobbie['name'],$hobbie['type']);
        }
        return $listHobbies;
    }

    public static function crear($name, $type){
        $connectDB = DB::crearInstancia();

        $sql = $connectDB -> prepare("INSERT INTO hobbies(name, type) VALUES (?,?)"); 
        // Recibos los datos desde from en un arreglo
        $sql -> execute(array($name, $type));
    }

     public static function borrar($id){
         $connectDB = DB::crearInstancia();

         $sql = $connectDB -> prepare("DELETE FROM hobbies WHERE id_hobbie=?");
         $sql -> execute(array($id));
     }


     public static function editar($id_hobbie){
        // Selecciono todo, me los guardo en un arreglo
         $connectDB = DB::crearInstancia();

         $sql = $connectDB -> prepare("SELECT * FROM hobbies WHERE id_hobbie=?");
         $sql -> execute(array($id_hobbie));
         
         $hobbie = $sql -> fetch();
        return new Hobbie($hobbie['id_hobbie'], $hobbie['name'], $hobbie['type']);
     }

     public static function editarInfo($id, $name, $type){
          $connectDB = DB::crearInstancia();

          $sql = $connectDB -> prepare("UPDATE hobbies SET name=?, type=? WHERE id_hobbie=?");
          $sql -> execute(array($name, $type, $id));
     }

}


?>