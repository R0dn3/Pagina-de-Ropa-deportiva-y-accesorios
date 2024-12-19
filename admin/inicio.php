<?php
    include "header.php";  
?>
            <div id="layoutSidenav_content">
                    <main>
                        <table class="table">
                            <thead class="bg-info">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">APELLIDO</th>
                                <th scope="col">CORREO</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "conexion.php";
                                $sql=$conexion->query(" 
                                SELECT * from cliente");
                                
                                while($datos=$sql->fetch_object()){ ?>
                              <tr>
                                <th scope="row"><?= $datos->IDcliente ?></th>
                                <td><?= $datos->nombreCliente ?></td>
                                <td><?= $datos->apellidoCliente ?></td>
                                <td><?= $datos->correo ?></td>
                                
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
            
