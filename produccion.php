<?php
include("/xampp/htdocs/web5/db/db.php");

$sql = "SELECT producto, cantidad FROM ordenes WHERE producto='producto'";
$resultado = mysqli_query($conexion, $sql);

$productos_en_produccion = array();
$cantidades_en_produccion = array();

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        array_push($productos_en_produccion, $fila["producto"]);
        array_push($cantidades_en_produccion, $fila["cantidad"]);
    }
}

// Paso 3: Consultar los productos más fabricados
$sql = "SELECT producto, COUNT(*) as cantidad FROM ordenes GROUP BY producto ORDER BY cantidad DESC LIMIT 5";
$resultado = mysqli_query($conexion, $sql);

$productos_mas_fabricados = array();
$cantidades_mas_fabricados = array();

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        array_push($productos_mas_fabricados, $fila["producto"]);
        array_push($cantidades_mas_fabricados, $fila["cantidad"]);
    }
}

// Paso 4: Consultar los productos más pedidos
$sql = "SELECT producto, COUNT(*) as cantidad FROM ordenes GROUP BY producto ORDER BY cantidad DESC LIMIT 5";
$resultado = mysqli_query($conexion, $sql);

$productos_mas_pedidos = array();
$cantidades_mas_pedidos = array();

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        array_push($productos_mas_pedidos, $fila["producto"]);
        array_push($cantidades_mas_pedidos, $fila["cantidad"]);
    }
}

// Paso 5: Mostrar la información en pantalla
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Productos en producción</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h1>Productos en producción</h1>
    <canvas id="productos"></canvas>
    <h1>Productos más fabricados</h1>
    <canvas id="mas_fabricados"></canvas>
    <h1>Productos más pedidos</h1>
    <canvas id="mas_pedidos"></canvas>
    <script>
        // Gráfica de productos en producción
        var ctx1 = document.getElementById('productos').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($productos_en_produccion); ?>,
                datasets: [{
                    label: 'Cantidad en producción',
                    data: <?php echo json_encode($cantidades_en_produccion); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfica de productos más fabricados
        var ctx2 = document.getElementById('mas_fabricados').getContext('2d');
        var chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($productos_mas_fabricados); ?>,
                datasets: [{
                    label: 'Cantidad fabricada',
                    data: <?php echo json_encode($cantidades_mas_fabricados); ?>,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfica de productos más pedidos
        var ctx3 = document.getElementById('mas_pedidos').getContext('2d');
        var chart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($productos_mas_pedidos); ?>,
                datasets: [{
                    label: 'Cantidad pedida',
                    data: <?php echo json_encode($cantidades_mas_pedidos); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>