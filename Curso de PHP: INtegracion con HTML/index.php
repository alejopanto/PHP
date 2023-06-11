<?php 
$nombre = "Jose";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
</head>
<body>
    <h1>Que dice</h1>

    <?php echo"ahora esto es PHP en HTML <br>"; ?>

    <?= "<i>Usando la sintaxis corta</i> <br> <b>Negrita</b> <br>" ?>

    <h1>Hola <?= $nombre ?></h1> 

</body>
</html>