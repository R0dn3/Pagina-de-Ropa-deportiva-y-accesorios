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
    <link rel="stylesheet" href="css/company1.css">
    
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

  <header>
    <div class="company">
        <h1>COMPANY</h1>
    </div>
    <div class="companys">
    <nav>
        <ul>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Especialidades</a></li>
            <li><a href="#">Personal</a></li>
        </ul>
    </nav>
  </div>
</header>

<main>
    <section class="banner">
        <h1>Sport Haven</h1>
        <p>Te ayudamos a alcanzar tus metas deportivas.</p>
    </section>
    <div class="empresa">
      <h2 class="subtitulos">Empresa</h2>
      <div>
        <p class="text">Somos una empresa especializada en la venta y distribución de artículos y accesorios deportivos, contamos con 6 años en el mercado, preocupándonos por brindarte lo mejor, porque para nosotros es muy importante satisfacer la necesidad de nuestro cliente. <br>
        Estamos comprometidos siempre en brindarte la mejor experiencia de compra en todos nuestros canales de ventas, vía online o en tienda física.
        </p>
      </div>
    </div>
    <div class="servicios">
        <h2 class="subtitulos">Servicios</h2>
        <p class="text">Ofrecemos una experiencia de compra completa y satisfactoria, brindando a nuestros clientes una amplia gama de productos, servicios y atención personalizada para que puedan alcanzar sus metas deportivas.</p>
      </div>
    <div class="contenedor">
      <div class="especialidades">
          <h2 class="subtitulos">Especialidades</h2>
          <p class="text"> Implementar tecnología innovadora en la tienda online, como realidad virtual o realidad aumentada, para mejorar la experiencia de compra y ofrecer una mayor interacción con los productos.</p>
        </div><div class="personal">
          <h2 class="subtitulos">Personal</h2>
          <div class="miembro">
              <img src="img/usuario.png" alt="Miembro del equipo 1">
              <h5>Jose Quio</h5>
              <p>Administardor</p>
          </div>
          <div class="miembro">
              <img src="img/usuario.png" alt="Miembro del equipo 2">
              <h5>Luis Perez</h5>
              <p>Vendedor</p>
          </div>
          <div class="miembro">
              <img src="img/usuario.png" alt="Miembro del equipo 3">
              <h5>Javier Lopez</h5>
              <p>Bodegero</p>
          </div>
        </div>
    </div>
    <div class="contenedor2">
        <div class="logo">
          <img src="img/logo.png" alt="SportHaven" class="img-logo">
          <h3>SPORT HAVEN</h3>
          
        </div>
        <div class="contacto">
            <h2>Contacto</h2>
            <p>Av. Marina 512</p>
            <p>+51 942 584 773</p>
            <p><a href="mailto:info@sporthaven.com">info@sporthaven.com</a></p>
        </div>
        <div class="redes-sociales">
          <p>Siguenos:</p>
          <a href="#"><img src="img/instagram.png" alt="Instagram">Instagram</a>
          <a href="#"><img src="img/facebook.png" alt="Facebook">Facebook</a>
          <a href="#"><img src="img/youtube.png" alt="YouTube">YouTube</a>
        </div>
    </div>
</main>

    <?php include "footer.php";
    ?>