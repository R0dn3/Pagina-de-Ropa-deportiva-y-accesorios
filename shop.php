<?php
    include "header.php";
    include "admin/conexion.php";
    $sql = $conexion->query("SELECT * FROM PRODUCTO WHERE precio < 50");
    ?>
    <section id="page-header">
        
        <h2>Descuentos</h2>
       
        <p>Obtén más con los cúpones del 70% de descuento</p>
        

    </section>

    <section id="product1" class="section-p1">  
        <div class="pro-container">
        <?php
        while ($datos = $sql->fetch_object()) {
        ?>
            <div class="pro">
                <img src="img/<?= $datos->imagen_url ?>" alt="">
                <div class="des">
                    <h5><?= $datos->nombre ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/<?= $datos->precio ?></h4>
                </div>
                <a class="shopping" href="vista_producto.php?id=<?= $datos->IDproducto ?>"><i class="fa-solid fa-cart-shopping  " ></i></a>
            </div>
            <?php
            }
            ?>
        </div>

    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>

    </section>

    <?php
    include "footer.php";
    $conexion->close();
    ?>