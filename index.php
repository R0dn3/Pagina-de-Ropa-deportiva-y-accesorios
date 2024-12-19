<?php include "header.php";
    include "admin/conexion.php";
    
    $sql = $conexion->query("SELECT * FROM PRODUCTO LIMIT 8");
    $sql1 = $conexion->query("SELECT * FROM PRODUCTO ORDER BY IDproducto DESC LIMIT 8");
?>

    <section id="hero">
        <h4>Trade-in-off</h4>
        <h2>Descuentos</h2>
        <h1>en todos los productos</h1>
        <p>Obtén más con los cúpones del 70% de descuento</p>
        <button> <a href="categorias.php" style="text-decoration: none; color: black;">Catálogo</a></button>

    </section>

    <section id="feature" class="section-p1">
       
        <div class="fe-box">
            <img src="img/zapatilla.jpg" alt="">
            <h4> Zapatillas</h4>

        </div>
        <div class="fe-box">
            <img src="img/ropa.jpg" alt="">
            <h4> Ropa</h4>

        </div>
        <div class="fe-box">
            <img src="img/accesorios4.avif" alt="">
            <h4> Accesorios</h4>

         </div>    
        <div class="fe-box">
            <img src="img/fitness.jpg" alt="">
            <h4> Fitness</h4>

        </div>
  
    </section>

    <section id="product1" class="section-p1">
        <h2>Nuevos Productos</h2>
        <p>Colección Primavera-Verano</p>
        <div class="pro-container">
        <?php 
        while ($producto = $sql->fetch_object()) {
        ?>
            <div class="pro">
                <img src="img/<?= $producto->imagen_url ?>" alt="">
                <div class="des">
                    <h5><?= $producto->nombre ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/.<?= $producto->precio ?></h4>
                </div>
                <a class="shopping" href="vista_producto.php?id=<?= $producto->IDproducto ?>"><i class="fa-solid fa-cart-shopping  " ></i></a>
            </div>
            <?php 
            }
            ?>
        </div>

    </section>

    <section id="banner" class="section-m1">
        <h4>No esperes más</h4>
        <h2>Encuentra hasta <span>70% descuento</span> en todo accesorios</h2>
        <button class="normal">Explore More</button>

    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Colección Primavera llegó para quedarse</p>
        <div class="pro-container">
        <?php 
        while ($producto = $sql1->fetch_object()) {
        ?>
            <div class="pro">
                <img src="img/<?= $producto->imagen_url ?>" alt="">
                <div class="des">
                    <h5><?= $producto->nombre ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/.<?= $producto->precio ?></h4>
                </div>
                <a class="shopping" href="vista_producto.php?id=<?= $producto->IDproducto ?>"><i class="fa-solid fa-cart-shopping  " ></i></a>
            </div>
            <?php 
            }
            ?>

        </div>

    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Ofertas de locura</h4>
            <h2>Paga uno por dos</h2>
            <span>La polera más solicitada en descuento </span>
            <button class="white">Ver más</button>
        </div> 
        <div class="banner-box banner-box2">
            <h4>primavera/verano</h4>
            <h2>Lo mejor de la temporada</h2>
            <span>Descuentos en marcas seleccionadas</span>
            <button class="white">Colección</button>
        </div>   

    </section>

    <section id="banner3">
        <div class="banner-box">
            
            <h2>SEASON SALE</h2>
            <h3>50% de descuento</h3>
            
        </div> 
        <div class="banner-box banner-box2">
            
            <h2>SEASON SALE</h2>
            <h3>50% de descuento</h3>
            
        </div> 
        <div class="banner-box banner-box3">
            
            <h2>SEASON SALE</h2>
            <h3>50% de descuento</h3>
            
        </div> 
    </section>

    

    <?php include "footer.php";
    ?>