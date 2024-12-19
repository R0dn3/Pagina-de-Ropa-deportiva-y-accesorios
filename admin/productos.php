<?php
    include "header.php";  
?>
            <div id="layoutSidenav_content">
                    <main>
                    <?php
                                   include "conexion.php";
                                
                                   include "eliminar_producto.php"; 
                                   
                                ?>
                        <div>
                            <form class="col-4 p-3" method="POST">
                                <h3>Registro de Productos</h3>
                                <?php
                                   
                                   include "registro_producto.php";
                                   
                                   $categorias = $conexion->query("SELECT IDcategoria, nombreCategoria FROM CATEGORIA");
                                ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="precio">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stock</label>
                                    <input type="number" class="form-control" name="stock">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                                    <select class="form-control" name="categoria" required>
                                        <option value="" disabled selected>Categorías</option>
                                        <?php
                                        while($categoria = $categorias->fetch_object()){
                                            echo "<option value='{$categoria->IDcategoria}'>{$categoria->nombreCategoria}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="imagen">
                                </div>

                                <BUtton type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Agregar Producto</BUtton>
                            </form>
                        </div>
                     
                        <table class="table">
                            <thead class="bg-info">
                              <tr>
                                <th scope="col">CODIGO</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">PRECIO</th>
                                <th scope="col">STOCK</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">IMAGEN</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "conexion.php";
                                $sql=$conexion->query(" 
                                SELECT 
                                PRODUCTO.IDproducto, 
                                PRODUCTO.nombre, 
                                PRODUCTO.descripcion, 
                                PRODUCTO.precio, 
                                PRODUCTO.stock, 
                                CATEGORIA.nombreCategoria,
                                PRODUCTO.imagen_url
                                FROM 
                                    PRODUCTO
                                INNER JOIN 
                                    CATEGORIA 
                                ON 
                                    PRODUCTO.IDcategoria = CATEGORIA.IDcategoria
                                 ");
                                
                                while($datos=$sql->fetch_object()){ ?>

                                <tr>
                                    <th scope="row"><?= $datos->IDproducto ?></th>
                                    <td><?= $datos->nombre ?></td>
                                    <td><?= $datos->descripcion ?></td>
                                    <td><?= $datos->precio ?></td>
                                    <td><?= $datos->stock ?></td>
                                    <td><?= $datos->nombreCategoria ?></td>
                                    <td><?= $datos->imagen_url ?></td>
                                    <td>
                                        <a href="modificar_productos.php?id=<?= $datos->IDproducto?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="productos.php?id=<?= $datos->IDproducto?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                              </tr>
                                <?php }
                                ?>
                              
                              
                            </tbody>
                          </table>
                    </main>
<?php
    include "footer.php";  
?>