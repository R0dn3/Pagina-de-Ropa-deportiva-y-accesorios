<?php
include "admin/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $conexion->real_escape_string($_POST['firstName']);
    $lastName = $conexion->real_escape_string($_POST['lastName']);
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $conexion->real_escape_string($_POST['password']);
    $confirmPassword = $conexion->real_escape_string($_POST['confirmPassword']);

   
    if ($password !== $confirmPassword) {
        echo '<div class="alert alert-danger">Las contraseñas no coinciden.</div>';
        exit();
    }

    
    $sql = $conexion->query("SELECT * FROM cliente WHERE correo = '$email'");
    if ($sql->num_rows > 0) {
        echo '<div class="alert alert-danger">El correo electrónico ya está registrado.</div>';
        exit();
    }

    
    $sql = "INSERT INTO cliente (nombreCliente, apellidoCliente, correo, contraseña) 
            VALUES ('$firstName', '$lastName', '$email', '$password')";

    if ($conexion->query($sql) === TRUE) {
        echo '<div class="alert alert-success">Usuario registrado correctamente.</div>';
        header("Location: login.php"); 
        exit();
    } else {
        echo '<div class="alert alert-danger">Error al registrar usuario: ' . $conexion->error . '</div>';
    }
}
?>
