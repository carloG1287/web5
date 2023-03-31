<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./Style/ordenCompra.css">
    <title>Generar orden de compra</title>
</head>

<body>
    <h1>Generar orden de compra</h1>
    <form method="post" action="mostrarOrdenes.php">
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br>

        <label for="proveedor">Proveedor:</label>
        <input type="text" id="proveedor" name="proveedor" required><br>

        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required><br>

        <label for="precio_unitario">Precio unitario:</label>
        <input type="number" step="0.01" id="precio_unitario" name="precio_unitario" min="0" required><br>

        <input type="submit" value="Generar orden">
    </form>
</body>

</html>