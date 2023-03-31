<?php
include("/xampp/htdocs/web5/db/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_id = $_POST["producto_id"];

    $sql = "DELETE FROM productos where Id= '$producto_id'";

    if ($conexion->query($sql)) {
        echo "Producto eliminado exitosamente";
    } else {
        echo "Error al eliminar el producto" . $conexion->error;
    }
}

$sql = "SELECT Id, nombre FROM productos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h1>Eliminar producto</h1>";
    echo "<form action= ' " . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<label><input type='radio' name='producto_id' value='" . $fila["Id"] . "'>" . $fila["nombre"] . "</label>";
    }
    echo "<input type='submit' value='Eliminar'>";
    echo "</form>";
} else {
    echo "No se encontraron productos";
}
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./Style/del.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
</head>

<body>

</body>

</html>