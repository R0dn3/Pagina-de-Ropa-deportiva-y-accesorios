<?php
    include "header.php";  
?>
            <div id="layoutSidenav_content">
                    <main>
                    <div>
                            <form class="col-4 p-3" method="POST">
                                <h3>Registro de Categorias</h3>
                                <?php
                                   
                                   include "registrar_categorias.php";
                                ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="imagen">
                                </div>

                                <BUtton type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Agregar Categoria</BUtton>
                            </form>
                        </div>
                        <table class="table">
                            <thead class="bg-info">
                              <tr>
                                <th scope="col">CODIGO</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">IMAGEN</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                include "conexion.php";
                                $sql=$conexion->query(" 
                                SELECT * from CATEGORIA where activo = true");
                                
                                while($datos=$sql->fetch_object()){ ?>
                              <tr>
                                <th scope="row"><?= $datos->IDcategoria ?></th>
                                <td><?= $datos->nombreCategoria ?></td>
                                <td><?= $datos->imagen_url ?></td>
                                <td>
                                    <a href="modificar_categoria.php?id=<?= $datos->IDcategoria?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="eliminar_categoria.php?id=<?= $datos->IDcategoria?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
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