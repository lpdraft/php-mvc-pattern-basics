<?php
# By Default, the variable $controler target the first page of aour app + we send it to the URL
$controler="pages";
$action="inicio";

if(isset($_GET['controler']) && isset($_GET['action'])){
    // # If the varible is set in the URL + it is not emply
    if(($_GET['controler'] != "") && ($_GET['action'] != "")){
        // get those variables
        $controler = $_GET['controler'];
        $action = $_GET['action'];
    }


    // Aqui podemos comprobar que se está ejecutando bien el código, es decir, recibimos los valores/control y la action propia
    // echo '<pre>';
    // print_r($_GET);
    // // De esta manera, dependiendo del parametro recibido ejecutaremos el método inicio() o erro()
    // print_r($controler);
    // print_r($action);
    // echo '</pre>';
}
 
// Template view + diff php code inclusion
include_once("views/template.php");
?>


