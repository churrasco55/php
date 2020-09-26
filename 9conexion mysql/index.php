<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("conexion.php"); ?>

    <form action="index.php" method="post">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="number" name="edad">
        <input type="submit" value="enviar" name="boton">    
    </form>
    <?php
        if (isset($_POST['boton'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];

            $insertar = "INSERT INTO `$tabla` (`nombre`,`apellido`,`edad`) VALUES ('$nombre','$apellido','$edad');";
            
            $ejecutar = mysqli_query($con, $insertar);
            if($ejecutar){
				echo "<script>alert('Datos ingresados!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
            
        }

    ?>
</body>
</html>