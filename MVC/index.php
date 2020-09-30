<?php
    //index:mostramos la salida de las vistas al usuario y tambien a traves de el enviaremosas las distintas acciones que el usuario envie al controlador
    
    //require() establece que el codigo del archivo invocado es requerido, es decir, oblitarorio para el
    //funcionamiento del programa. Por ello, si el archivo especificado en la funcion require() no se encuentra
    //saltara un error "php fatal error" y el programa php se detendra

    //require_once() funcionan de la misma manera que sus respectivo, salvo que al utilizar la version _once
    //se impide la carga de un mismo archivo mas de una vez
    require_once ("controllers/controller.php");
    
    $mvc = new MvcController();
    $mvc -> plantilla();

?>