<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["clave"])) {
        echo "Completa todos los campos";
    } else {
        $nombre=$_POST["nombre"];
        //Definiendo la expresión regular que solo permite letras
        $patron = "/^[a-zA-Z]+$/";
        //verificando si el nombre cumple requisitos
        if (preg_match($patron,$nombre)) {

        } else {
            //nombre de usuario contiene numeros
            echo "el nombre de usuario contiene numeros o caracteres extraños";
        }
        $apellido=$_POST["apellido"];
         //Definiendo la expresión regular que solo permite letras
         $patron = "/^[a-zA-Z]+$/";
         //verificando si el nombre cumple requisitos
         if (preg_match($patron,$apellido)) {
             
         } else {
             echo "el apellido contiene numeros o caracteres extraños";
         }
        $usuario=$_POST["usuario"];
         //Definiendo la expresión regular que solo permite letras
         $patron = "/^[a-zA-Z]+$/";
         //verificando si el nombre cumple requisitos
         if (preg_match($patron,$usuario)) {

         } else {
             //nombre de usuario contiene numeros
             echo "el nombre de usuario contiene numeros o caracteres extraños";
         }
        $clave=$_POST["clave"];
        $sql=$conexion->query(" insert into usuarios(nombre,apellido,usuario,clave)values('$nombre','$apellido','$usuario','$clave') ");
        if ($sql==1) {
            echo 'Usuario registrado correctamente';
        } else {
            echo '¡Error al registrar usuario!';
        }
     }
    
}
?>