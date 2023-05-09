<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css"></link>
    <title>Inicio de sesión</title>
</head>
<body class="wallpaper d-flex justify-content-center align-items-center vh-100">
    <div class="login-content bg-white p-5 rounded-5 text-secondary" style="width:25rem">
    <div class="d-flex justify-content-center">
        <img src="img/login-icon.svg" alt="login-icon" style="height: 7rem;">
    </div>
        <form method="post" action="" class="">
            <img src="img/User-avatar.svg.png" alt="avatar"> 
            <h3 class="tittle text-center fs-1 fw-bold mt-3">INICIA SESIÓN</h3>
            <?php
            include "controlador/conexion_bd.php";
            include "controlador/conexion_bd.php";
            ?>
            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="/usuario.svg" alt="username-icon" style="height: 1rem;">
                </div>
                    <input class="form-control" type="text" class="input" name="usuario" placeholder="Usuario">
            </div>
            <div class="input-group mt-3">
                <div class="input-group-text bg-info">
                    <img src="img/password-icon.svg" alt="" style="height: 1rem;">
                </div>
                <input type="password" class="form-control" class="input" name="password" placeholder="Contraseña">
            </div>
            <div class="view">
                <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
                <input type="submit" class="btn btn-info text-white w-100 mt-4" type="submit" value="INICIAR SESION" name="btningresar" >
                <div class="d-flex gap-1 justify-content-center mt-3">
                    <div>¿No tienes una cuenta?</div>
                    <a class="text-decoration-none text-info fw-semibold" href="register.php">Registrarse</a> 
                    <a class="text-decoration-none text-info fw-semibold" href="../catedra/src/index.html">Regresar</a> 
                </div>
            </div> 
        </form>
    </div>
</body>
</html>