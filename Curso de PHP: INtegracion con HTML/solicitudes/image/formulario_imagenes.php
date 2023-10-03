<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de imagenes</title>
</head>

<body>
    <!-- post -->
    <form action="./serverImagen.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">

        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image">

        <button type="submit">Enviar formulario</button>
    </form>
</body>

</html>