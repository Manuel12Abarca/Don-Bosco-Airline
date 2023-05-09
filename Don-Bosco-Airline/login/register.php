
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../login/loging.css"></link>
    <title>Register</title>
</head>

<body class="wallpaper d-flex justify-content-center align-items-center vh-100">
    <div class="container bg-white p-5 rounded-5 text-secondary" style="width:25rem">
        <div class="d-flex justify-content-center">
            <img src="img/login-icon.svg" alt="login-icon" style="height: 7rem;">
        </div>
        <div class="title">
            <h2 class="text-center fs-1 fw-bold mt-3">REGISTRATE</h2>
        </div>
        <form action="" method="POST" class="formulario d-flex justify-content-center align-items-center ">
            <?php
            include("controlador/conexion_bd.php");
            include("controlador/controlador_regiter_user.php");
            ?>
            <div class="padre ">
                <div class="nombre input-group mt-2">
                    <div class="input-group-text bg-info">
                        <img src="username-icon.svg" alt="username-icon" style="height: 1rem;">
                    </div>
                    <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="apellido input-group mt-3">
                    <div class="input-group-text bg-info">
                        <img src="login-icon.svg" alt="username-icon" style="height: 1rem;">
                    </div>
                    <input class="form-control" type="text" name="apellido" placeholder="Apellido">
                </div>
                <div class="usuario input-group mt-3">
                    <div class="input-group-text bg-info">
                        <img src="Usuario.png" alt="username-icon" style="height: 1rem;">
                    </div>
                    <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                </div>
                <div class="clave input-group mt-3">
                    <div class="input-group-text bg-info">
                        <img src="password-icon.svg" alt="" style="height: 1rem;">
                    </div>
                    <input class="form-control" type="password" name="clave" placeholder="Contraseña">
                </div>
                <div class="cuenta ">
                    <input class="btn btn-info text-white w-100 mt-3" type="submit" value="Registrar" name="registro">
                    <a href="/Don-Bosco-Airline-main/login/login.php" class="text-decoration-none text-info fw-semibold d-flex justify-content-center mt-3">Iniciar sesión</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>