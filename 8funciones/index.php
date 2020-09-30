<?php
    function hola(){        //funcion sin parametros
        echo "hola <br>";   //se agregan los datos que tiene la funcion para ejecutar
    }
    hola();                 //se llama a la funcion para que ejecute lo dicho arriba

    function hola2($dato){  //funcion con parametro
        echo "$dato<br>";   //dato a ejecutar
    }
    hola2("2");             //se llama a la funcion y se agrega ese dato en $dato para ejecutar lo de arriba aca
    
    function hola3($dato2){     //funcion con retorno
        $dato2=$dato2*$dato2;   //se hace una cuenta lista para ser ejecutada
        return $dato2;          //el return reenvia los datos de donde fue llamada la funcion
    }
    $num = hola3(8);            //$num es igual a la funcion y le envia el valor "8", entonces la funcion ejecuta una cuenta y como la variable llamo a la funcion el dato de la funcion es enviado a la variable
    echo $num;                  //entonces el dato obtenido de la funcion se guarda y muestra en $num
?>