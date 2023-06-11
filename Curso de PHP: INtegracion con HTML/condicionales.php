<?php
$condicional = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- MALA PRACTICA -->
    <h1>No hacer</h1>
    <?php
    if ($condicional) {
        echo "Condicional verdadera";
    } else {
        echo "Condicional falsa";
    }
    ?>

    <!-- PRACTICA ACEPTABLE -->
    <h1>Aceptable</h1>
    <?php if ($condicional) { ?>
        😮
    <?php } else { ?>
        🤑
    <?php } ?>

    <!-- ASI SE HACE -->
    <h1>Forma correcta</h1>
    <?php if ($condicional) : ?>
        😮 Asi se hace
    <?php else : ?>
        🤑 Asi se hace
    <?php endif; ?>
</body>

</html>