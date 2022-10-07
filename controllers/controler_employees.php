<?php
include_once("./conexion.php");
include_once("./models/employee.php");

DB::crearInstancia();

class ControlerEmployees{
    public function inicio(){
        // echo '<pre>';
        // print_r(Empleado::consultar());
        // echo '</pre>';
      
    $employees = Employee::readDB();
        include_once ("views/employees/landingPage.php");
    }


    public function crear(){
        // Comprobamos que llegan los datos desde el POST
        if($_POST){
            // print_r($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];

            // Mandamos los valores del formulario a los paámetros del método
            Employee::create($name, $email);
             header("Location: ./?controler=employees&action=inicio");
        }
        include_once ("views/employees/create.php");
    }


    public function editar(){
        if($_POST){
            // print_r($_POST);
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];

            Employee::updateInfo($id,$name, $email);
            header("Location: ./?controler=employees&action=inicio");
        }

          $id = $_GET['id'];
        // print_r(Empleado::editar($id));

        $employee = (Employee::update($id));
        include_once ("views/employees/update.php");
    }

    public function borrar(){
        // Ver datos del empleado que vamos a borrar
        // print_r($_GET);

        $id = $_GET['id'];

        Employee::remove($id);
        // header("Location: ./empleados/inicio.php"); #No va muy bien
        header("Location: ./?controler=employees&action=inicio");
    }
}


?>