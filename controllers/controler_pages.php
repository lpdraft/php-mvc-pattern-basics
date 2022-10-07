<?php
// Clase Controlador para las páginas
class ControlerPages{
    public function inicio(){
        // Método para el inicio
        include_once ("views/pages/inicio.php");
    }
    public function error(){
        // Método para el error
        include_once ("views/pages/error.php");

    }
}


?>
