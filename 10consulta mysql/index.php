<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="s.css">
</head>
<body>
    <?php include ("conexion.php"); ?>

    <form action="index.php" method="post">
        <input type="text" name="dato1">
        <input type="text" name="dato2">
        <input type="number" name="dato3">
        <input type="submit" value="enviar" name="boton">
        <input type="submit" value="consulta" name="boton2">
    </form>
    <?php
        if (isset($_POST['boton'])) {
            $dato1 = $_POST['dato1'];
            $dato2 = $_POST['dato2'];
            $dato3 = $_POST['dato3'];
        
            $enviar = "INSERT INTO `$tabla` (`dato1`,`dato2`,`dato3`) VALUES ('$dato1','$dato2','$dato3');";

            $ejecutar = mysqli_query($con,$enviar);
            echo "<script>alert('Datos ingresados!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        if (isset($_POST['boton2'])) {
            $resultado_consul = mysqli_query($con,"SELECT * FROM `$tabla`");
            while ($consulta = mysqli_fetch_array($resultado_consul)) {
                ?>
                <div><?php
                echo "<h1>".$consulta['dato1']."</h1>";
                echo "<h1>".$consulta['dato2']."</h1>";
                echo "<h1>".$consulta['dato3']."</h1>";
                ?></div><?php
            }
        }
  ?>
</body>
</html>