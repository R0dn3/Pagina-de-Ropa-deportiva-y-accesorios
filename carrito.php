<?php
    include "header.php";
    include "admin/conexion.php";
    $sql = $conexion->prepare("SELECT c.IDproducto, p.imagen_url, p.nombre, p.precio, c.cantidad FROM carrito c JOIN producto p ON c.IDproducto = p.IDproducto WHERE c.IDcliente = ?");
    $sql->bind_param("i", $id_Cliente);
    $sql->execute();
    $result = $sql->get_result();
?>

    <section id="cart" class="section-p1">
       <table width="100%">
        <thead>
            <tr>
                <td>Quitar</td>
                <td>Imagen</td>
                <td>Producto</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $total = 0;
            while ($row = $result->fetch_assoc()) {
                $subtotal = $row['precio'] * $row['cantidad'];
                $total += $subtotal;
                ?>
            <tr>
                    <td><a href="quitar_carrito.php?id_producto=<?= $row['IDproducto'] ?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
                    <td><img src="img/<?= $row['imagen_url'] ?>" alt=""></td>
                    <td><?= $row['nombre'] ?></td>
                    <td>S/. <?= number_format($row['precio'], 2) ?></td>
                    <td><?= $row['cantidad'] ?></td>
                    <td>S/. <?= number_format($subtotal, 2) ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
       </table> 
    </section>
    
    <section id="cart-add" class="section-p1">
        <div id="cupon">
            <h3>Aplica cupon</h3>
            <div>
                <input type="text" placeholder="Ingresa cupon">
                <button class="normal">Aplica</button>
            </div>
        </div>

        <div id="subtotal">
           
            <table>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>S/. <?= number_format($total, 2) ?></strong></td>

                </tr>
            </table>
            <form action="card.php" method="post">
                <button class="normal" type="submit">Procede tu pedido</button>
            </form>
        </div>
    </section>

    <?php
    include "footer.php";
    $sql->close();
    $conexion->close();
    ?>