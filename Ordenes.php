<?php
include("/xampp/htdocs/web5/db/db.php");
$sql = "SELECT * FROM ordenes";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Fecha: " . $row["fecha"] . "<br>";
        echo "Proveedor: " . $row["proveedor"] . "<br>";
        echo "Producto: " . $row["producto"] . "<br>";
        echo "Cantidad: " . $row["cantidad"] . "<br>";
        echo "Precio unitario: " . $row["precio_unitario"] . "<br><br>";
    }
} else {
    echo "No se encontraron órdenes de compra.";
}


$conexion->close();
