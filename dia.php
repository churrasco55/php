<?php 
    $dia = date('l');

    switch ($dia) {
        case 'Monday':
            echo "hoy es Lunes";
            break;
        case 'Tuesday':
            echo "hoy es Martes";
            break;
        case 'Wednesday':
            echo "hoy es Miercoles";
            break;
        case 'Thursday':
            echo "hoy es Jueves";
            break;
        case 'Friday':
            echo "hoy es Viernes";
            break;
        case 'Saturday':
            echo "hoy es Sabado";
            break;
        case 'Sunday':
            echo "hoy es Domingo";
            break;
    }
?>