<?php
    //codigo imperativo 

    $var1 = (object)["nombre"=>"martin", "altura"=>140];
    $var2 = (object)["nombre"=>"ricardo", "altura"=>190];

    function mostrar($persona){
        echo "<p>Hola soy $persona->nombre. y mi altura es de $persona->altura</p>";
    }

    mostrar($var2);
?>