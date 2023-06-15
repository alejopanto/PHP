<?php
$usuarios = array(
    array(
        "id" => 0,
        "username" => "Jose"
    ),
    array(
        "id" => 1,
        "username" => "Alejandro"
    ),
    array(
        "id" => 2,
        "username" => "Pantoja"
    )
);

$edad = 29;
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
    <?php echo (json_encode($usuarios)) ?>
    <?php echo ($edad) ?>
    <script>
        let usuarios = JSON.parse('<?= json_encode($usuarios) ?>')
        let edad = '<?= $edad ?>'
    </script>

    <script src="./index.js"></script>
</body>

</html>