<?php
    $datos = ['sarandi','mitre'];
    $datos[0] = [
        'nombre'=>'avellaneda ',
        'poblacion'=>50       
    ];
    $datos[1] = [
        'nombre'=>'mitree ',
        'poblacion'=>55
    ];

    //for ($i=0;$i<count($datos);$i++) { 
    //    echo $datos[$i]['nombre'];
    //    echo $datos[$i]['poblacion'];
    //    echo "<br>";
    //}

    foreach ($datos as $datardo) {
        echo $datardo['nombre'];
        echo $datardo['poblacion'];
        echo "<br>";
    }
?>