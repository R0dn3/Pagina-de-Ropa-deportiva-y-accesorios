<?php
session_start(); 
include "admin/conexion.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $conexion->real_escape_string($_POST['password']);

    
    $sql = $conexion->query("SELECT * FROM cliente WHERE correo = '$email'");

    if ($sql->num_rows > 0) {
        $user = $sql->fetch_assoc();
        
        
        if ($password === $user['contraseña']) {
           
            $_SESSION['IDcliente'] = $user['IDcliente'];
            $_SESSION['user_email'] = $user['correo']; 
            header("Location: index.php"); 
            exit();
        } else {
          
            echo '<div class="alert alert-danger">Contraseña incorrecta.</div>';
        }
    } else {
       
        echo '<div class="alert alert-danger">Correo electrónico no encontrado.</div>';
    }
}
?>



