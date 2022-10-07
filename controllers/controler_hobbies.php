<?php
include_once("./core/conexion.php");
include_once("./models/hobbie.php");

DB::crearInstancia();

class ControlerHobbies{
    public function inicio(){
        // echo '<pre>';
        // print_r(Empleado::consultar());
        // echo '</pre>';
      
    $hobbies = Hobbie::consultar();
        include_once ("views/hobbies/landingPage.php");
    }

    public function crear(){
        // Comprobamos que llegan los datos desde el POST
        if($_POST){
            // print_r($_POST);
            $name = $_POST['name'];
            $type = $_POST['type'];

            // Mandamos los valores del formulario a los paámetros del método
            Hobbie::crear($name,$type);
             header("Location: ./?controler=hobbies&action=inicio");
        }
        include_once ("views/hobbies/addHobbie.php");
    }

    public function editar(){
        if($_POST){
            // print_r($_POST);
            $id=$_POST['id'];
            $name=$_POST['name'];
            $type=$_POST['type'];

            Hobbie::editarInfo($id,$name, $type);
            header("Location: ./?controler=hobbies&action=inicio");
        }

          $id = $_GET['id'];
        // print_r(Empleado::editar($id));

        $hobbie = (Hobbie::editar($id));
        include_once ("views/hobbies/updateHobbie.php");
    }

    public function borrar(){
        // Ver datos del empleado que vamos a borrar
        // print_r($_GET);

        $id = $_GET['id'];

        Hobbie::borrar($id);
        // header("Location: ./empleados/inicio.php"); #No va muy bien
        header("Location: ./?controler=hobbies&action=inicio");
    }
}


?>