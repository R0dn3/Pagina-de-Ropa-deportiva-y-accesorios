
<?php include "header.php";
    include "admin/conexion.php";
    
    $categoria_id = isset($_GET['categoria']) ? $_GET['categoria'] : 0;

    $sql = $conexion->query("SELECT * from producto where IDcategoria = $categoria_id");
    
    $categoria_nombre = "";
    
    $categoria_sql = $conexion->query("SELECT nombreCategoria FROM categoria WHERE IDcategoria = $categoria_id");
    if ($categoria_sql->num_rows > 0) {
        $categoria_nombre = $categoria_sql->fetch_object()->nombreCategoria;
    }
    
?>
    <section id="futbol" class="section-p1">
        <h2><?= $categoria_nombre ?></h2>
        <p>Productos</p>
        <div class="pro-container">
        <?php 
        while($datos=$sql->fetch_object()){
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
            <?php }
            ?>
        </div>

    </section>
    
    <?php include "footer.php";?>
    