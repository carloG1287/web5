<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/orden.css">
    <title>Ordenes</title>
</head>

<body>
    <h1>Ordenes de compra Generadas</h1>


    <?php
    $fecha = $_POST['fecha'];
    $proveedor = $_POST['proveedor'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];

    $total = $cantidad * $precio_unitario;

    echo '<table>';
    echo '<tr><th>Fecha:</th><td>' . $fecha . '</td></tr>';
    echo '<tr><th>Proveedor:</th><td>' . $proveedor . '</td></tr>';
    echo '<tr><th>Producto:</th><td>' . $producto . '</td></tr>';
    echo '<tr><th>Cantidad:</th><td>' . $cantidad . '</td></tr>';
    echo '<tr><th>Precio unitario:</th><td>' . $precio_unitario . '</td></tr>';
    echo '<tr><th>Total:</th><td>' . $total . '</td></tr>';
    echo '</table>';

    ?>

</body>

</html>