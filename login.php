<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/login.css">
    <title>Login Qzulia</title>
</head>

<body>
    <form action="Validar.php" method="post">
        <h1>Sistema de login</h1>
        <p>Usuario <input type="text" placeholder="Nombre de Usuario" name="Usuario"></p>
        <p>Contraseña <input type="password" placeholder="Contraseña" name="Contraseña"></p>
        <input type="submit" value="Ingresar">
        <a href="registro.php" class="boton">No tienes cuenta?</a>
    </form>
</body>

</html>