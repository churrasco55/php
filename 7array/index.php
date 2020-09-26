<?php

    $agua = array();
    
    $agua[] = "banana";
    $agua[] = "a";
    $agua[] = "c";
    $agua[] = "ads";
    $agua[9] = "pito";

    rsort($agua);

    for ($i=0;$i<count($agua);$i++) { 
        echo $agua[$i]."<br>";
    }
    
    //print_r($agua);
    //var_dump($agua);
?>
