<?php
    include "header.php";  
?>
            <div id="layoutSidenav_content">
                    <main>
                      
                        <table class="table">
                            <thead class="bg-info">
                              <tr>
                                <th scope="col">CODIGO</th>
                                <th scope="col">CORREO CLIENTE</th>
                                <th scope="col">PRODUCTO</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">CANTIDAD</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">IMPORTE</th>
                                <th scope="col">METODO PAGO</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "conexion.php";
                                $sql=$conexion->query(" 
                                SELECT 
                                    ventas.IDventa,
                                    cliente.correo,
                                    producto.nombre,
                                    categoria.nombreCategoria,
                                    ventas.cantidad,
                                    ventas.fecha,
                                    ventas.subtotal,
                                    ventas.metodo_pago
                                FROM 
                                    ventas
                                JOIN 
                                    cliente ON ventas.IDcliente = cliente.IDcliente
                                JOIN 
                                    producto ON ventas.IDproducto = producto.IDproducto
                                JOIN 
                                    categoria ON producto.IDcategoria = categoria.IDcategoria;");

                                
                                while($datos=$sql->fetch_object()){ ?>
                              <tr>
                                <th scope="row"><?= $datos->IDventa ?></th>
                                <td><?= $datos->correo ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->nombreCategoria ?></td>
                                <td><?= $datos->cantidad ?></td>
                                <td><?= $datos->fecha ?></td>
                                <td>S/.<?= $datos->subtotal ?></td>
                                <td><?= $datos->metodo_pago ?></td>

                              </tr>
                              <?php }
                                ?>
                            </tbody>
                          </table>
                    </main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; 2024</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
  </footer>
  </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
  </html>