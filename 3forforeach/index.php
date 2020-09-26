<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="number" name="a">
    <input type="submit" name="s">
    </form>
    <?php 
        if (isset($_POST['s'])) {
            $a = $_POST['a'];

            for ($i=0; $i<$a; $i++) { 
                $d = 2;
                $t = $d*$i;
                echo $t;
                echo "<br>";
            }
        }
    ?>
</body>
</html>