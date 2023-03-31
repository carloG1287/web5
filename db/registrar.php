<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["clave"])) {
        echo '<div class="alerta">Uno de los campos esta vacio</div>';
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $sql = $conexion->query(" insert into users(usuario,contraseña,nombre,apellido)values('$usuario','$clave','$nombre','$apellido')");
        if ($sql == 1) {
            echo '<div class="alerta">se resgistro correectamente</div>';
        } else {
            echo '<div class="alerta">error al registrar</div>';
        }
    }
}
?>
,