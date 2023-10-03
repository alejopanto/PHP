<?php

echo "<pre>";
var_dump($_FILES);
echo "<pre>";

$base_name = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$ruta = "./images_up/$base_name";

move_uploaded_file($image, $ruta);

echo ($base_name);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="<?= $ruta ?>" alt="<?= $base_name ?>">
</body>

</html>