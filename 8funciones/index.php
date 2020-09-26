<?php
    function hola(){
        echo "hola <br>"; 
    }
    hola();

    function hola2($dato){
        echo "$dato<br>";
    }
    hola2("2");
    
    function hola3($dato2){
        $dato2=$dato2*$dato2;
        return $dato2;
    }
    $num = hola3(8);
    echo $num;
?>