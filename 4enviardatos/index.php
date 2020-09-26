<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="b" id="">
        <input type="submit" name="a">
         
    </form>
    <?php    
            $nombre = $_GET['b'];    
            echo "Hola <b> $nombre</b>, Espero que estes muy bien!.";   
        ?>   
</body>
</html>