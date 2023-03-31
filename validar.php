<?php

$usuario = $_POST['Usuario'];
$contraseña = $_POST['Contraseña'];
session_start();
$_SESSION['Usuario'] = $usuario;

include('./db/db.php');

$consulta = "SELECT*FROM users where usuario='$usuario' and contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:index.php");
} else {
?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
