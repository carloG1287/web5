<?php
include("/xampp/htdocs/web5/db/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
}

$sql = "INSERT INTO productos (nombre, descripcion, cantidad) values ('$nombre','$descripcion','$cantidad')";

if ($conexion->query($sql) === TRUE) {
    echo "Producto agregado exitosamente";
} else {
    echo "Error al agregar el producto: " . $conexion->error;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/agg.css">
    <title>agregar producto</title>
</head>

<body>
    <h1>agregar producto</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" require>
        <label for="description">descripcion</label>
        <textarea name="descripcion"></textarea>
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" min="0" require>

        <input type="submit" value="agregar producto">
    </form>
</body>

</html>