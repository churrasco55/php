<?php
    $datos = ['sarandi','mitre'];   //datos del array
    $datos[0] = [                   //
        'nombre'=>'avellaneda ',    //todo esto se agrega en el primer dato del array  
        'poblacion'=>50             //se esta indicando donde va a ir en el [0]
    ];                              //
    $datos[1] = [
        'nombre'=>'mitree ',
        'poblacion'=>55
    ];

    for ($i=0;$i<count($datos);$i++){   //se cuenta cuantos datos tiene el array y se hace el bucle 
        echo $datos[$i]['nombre'];      //en este caso el [$i] es para saber que numero tiene el dato que queremos pedir
        echo $datos[$i]['poblacion'];   //con el ['es el dato que esta en el array que se pide']
        echo "<br>";
    }

    echo "<br>";

    foreach ($datos as $datardo) {      //se le cambia el nombre a la variable para ser usada en el foreach
        echo $datardo['nombre'];        //y en bucle se va mostrando con los datos que estamos pidiendo
        echo $datardo['poblacion'];
        echo "<br>";
    }
?>