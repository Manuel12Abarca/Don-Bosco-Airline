<?php
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$password'";
        $result = $conexion->query($sql);
        if(mysqli_num_rows($result) == 1) {
            // Los datos del usuario son almacenados
            $row = mysqli_fetch_assoc($result);
            $_SESSION["id"]=$row["id"];
            $_SESSION["nombre"]=$row["nombre"];
            $_SESSION["apellido"]=$row["apellido"];
            // El usuario existe en la base de datos
            // Redireccionar al usuario a la página principal
            header("Location:../controlador/login.php");
            exit();
        } else {
            // El usuario no existe en la base de datos
            // Mostrar un mensaje de error
            echo "Los datos no coinciden";
        }
        
    } else {
        echo "Completa todos los campos";
    }
}

?>