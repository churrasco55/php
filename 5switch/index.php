<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="dato1" id="">
        <input type="submit" value="daleee" name="boton">
    </form>
    <?php 
        if (isset($_GET['boton'])) {
            $dato1 = $_GET['dato1'];


            switch ($dato1) {
                case 'a':
                    echo "el valor es 22";
                    break;
                case 'b':
                    echo "el valor es 333";
                    break;
                default:
                    echo "ni idea amigo";
                    break;
            }
        }
    ?>
</body>
</html>