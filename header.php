<?php
session_start();

if (isset($_SESSION['IDcliente'])) {
    
    $id_Cliente = $_SESSION['IDcliente'];
    //echo "Usuario identificado: $id_Cliente";
} else {
    
    echo "Usuario no identificado. Por favor inicia sesión.";
    
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Heaven</title>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css >
    
    
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    
    <section id="header">
        <a ref="index.php"><img src="img/logo3.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li> 
                <li><a href="company.php">About</a></li> 
                 
                <li id="lg-bag"><a href="carrito.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>  
                <a href="#" id="close"><i class="fas fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="carrito.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>          
        </div>
    </section>


   