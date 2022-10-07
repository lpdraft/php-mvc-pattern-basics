    <?php
    // Get variables
    echo $controler; 
    #segun la definicion que reciba enseñara una pagina u otra
    echo $action; 

    include_once ("controllers/controler_".$controler.".php");

    $objControler = "Controler".ucfirst($controler);

    // Como ya incluí la classe ControladorPaginas, puedo instanciarla
    $controlerPage = new $objControler();
    // Llamo a su método inicio(), que tiene la ruta del archivo original inicio.php, y lo centralizo
    $controlerPage->$action();
    ?>
