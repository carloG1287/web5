<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/regis.css">
    <title>Registro Qzulia</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="Formulario">
            <h2>REGISTRAR</h2>

            <?php
            include("/xampp/htdocs/web5/db/db.php");
            include("/xampp/htdocs/web5/db/registrar.php");
            ?>

            <div class="Padre">
                <div class="Nombre">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre">
                </div>
                <div class="Apellido">
                    <label for="">Apellidos</label>
                    <input type="text" name="apellido">
                </div>
                <div class="Usuario">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario">
                </div>
                <div class="clave">
                    <label for="">Contraseña</label>
                    <input type="password" name="clave">
                </div>
                <div class="cuenta">
                    <input class="boton" type="submit" value="Registrar" name="registro">
                    <a href="index.php">Salir</a>
                    <a href="login.php"> Ya tienes cuenta?</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>