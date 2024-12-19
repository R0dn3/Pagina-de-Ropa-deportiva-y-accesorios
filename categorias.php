
<?php include "header.php";
    include "admin/conexion.php";
    
    $sql=$conexion->query("SELECT * from CATEGORIA where activo = true ");
    
?>
   
    <section id="categorias" class="section-p1">
        <h2>Categorias</h2>
        <?php 
        while($datos=$sql->fetch_object()){
        ?>
        <div class="fe-box">
            <a href="productos.php?categoria=<?= $datos->IDcategoria ?>">
            <img src="img/<?= $datos->imagen_url ?>" alt="">
            <h4><?= $datos->nombreCategoria ?></h4>
        </a>
        </div>
       
        <?php }
        ?>
    </section>
    
    
    <?php include "footer.php";?>
