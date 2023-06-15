<?php

$usuarios = ["Mr.Michi", "Alejandro", "Paquito"];

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
    <ul>
        <?php for ($x = 0; $x < 10; $x++) : ?>
            <li><?= $x ?></li>
        <?php endfor; ?>
    </ul>

    <?php while (false) : ?>
        <li>algo</li>
    <?php endwhile; ?>

    <ul>
        <?php foreach ($usuarios as $user) : ?>
            <li><?= $user ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>