<?php
  include "conexion.php";
  $id=$_GET["id"];
  $sql=$conexion->query(" select * from producto where IDproducto=$id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
      <h3>Modificar Productos</h3>
      <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
      <?php
          include "conexion.php";
          //include "registro_producto.php";

          $categorias = $conexion->query("SELECT IDcategoria, nombreCategoria FROM CATEGORIA");
          include "modificar_producto.php";
          while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre ?>">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripcion</label>
              <input type="text" class="form-control" name="descripcion" value="<?=$datos->descripcion ?>">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Precio</label>
              <input type="number" class="form-control" name="precio" value="<?=$datos->precio ?>">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Stock</label>
              <input type="number" class="form-control" name="stock" value="<?=$datos->stock ?>">
          </div>
          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Categoria</label>
          <select class="form-control" name="categoria" required value="<?=$datos->categoria ?>">
              <option value="" disabled selected>Categorías</option>
              <?php
              while($categoria = $categorias->fetch_object()){
                $selected = ($datos->IDcategoria == $categoria->IDcategoria) ? 'selected' : '';
                  echo "<option value='{$categoria->IDcategoria}' $selected>{$categoria->nombreCategoria}</option>";
              }
              ?>
          </select>
      </div>
      <div class="mb-3">
          <label for="imagen" class="form-label">Imagen</label>
          <input type="file" class="form-control" name="imagen">
      </div>

          <?php }
      ?>
      <BUtton type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar Producto</BUtton>
  </form>
</body>
</html>