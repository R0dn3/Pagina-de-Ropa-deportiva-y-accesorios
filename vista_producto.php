<?php
include "header.php";
include "admin/conexion.php";


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = $conexion->query("SELECT * FROM PRODUCTO WHERE IDproducto = $id");
    if ($datos = $sql->fetch_object()) {
        $categoriaId = $datos->IDcategoria;
?>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/<?= $datos->imagen_url ?>" width="100%" id="MainImg" alt="">
        </div>
      </div>

      <div class="single-pro-details">
        <h4><?= $datos->nombre ?></h4>
        <h2>S/<?= $datos->precio ?></h2>
        <h2>Stock <?= $datos->stock ?></h2>
        <form method="POST" action="agregar_carrito.php">
            <input type="hidden" name="id_producto" value="<?= $datos->IDproducto ?>">
            <input type="number" name="cantidad" value="1" min="1" max="<?= $datos->stock ?>">
            <button class="normal" type="submit">Agregar al Carrito</button>
        </form>
        <h4>Detalles del Producto</h4>
        <span><?= $datos->descripcion ?></span>
      </div>
    </section>


    

    <section id="product1" class="section-p1">
        <h2>Productos Similares</h2>
        <p>Colección Primavera-Verano</p>
        <div class="pro-container">
        <?php
            
            $similarProductsSql = $conexion->query("SELECT * FROM PRODUCTO WHERE IDcategoria = $categoriaId AND IDproducto != $id LIMIT 4");
            while ($similarProduct = $similarProductsSql->fetch_object()) {
            ?>
            <div class="pro">
                <img src="img/<?= $similarProduct->imagen_url ?>" alt="">
                <div class="des">
                    <h5><?= $similarProduct->nombre ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?= $similarProduct->precio ?></h4>
                </div>
                <a class="shopping" href="vista_producto.php?id=<?= $similarProduct->IDproducto ?>"><i class="fa-solid fa-cart-shopping  " ></i></a>
            </div>
            <?php
            }
            ?>
        </div>

    </section>

    <?php
    } else {
        echo '<div class="alert alert-danger">Producto no encontrado.</div>';
    }
} else {
    echo '<div class="alert alert-warning">ID de producto no proporcionado.</div>';
}
    include "footer.php";
?>
    