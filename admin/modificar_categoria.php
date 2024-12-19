<?php
  include "conexion.php";
  $id=$_GET["id"];
  $sql=$conexion->query(" select * from categoria where IDcategoria=$id ");
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
      <h3>Modificar Categorias</h3>
      <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
      <?php
          include "modificar_categorias.php";
          while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" value="<?=$datos->nombreCategoria ?>">
          </div>
          <div class="mb-3">
              <label for="imagen" class="form-label">Imagen</label>
              <input type="file" class="form-control" name="imagen" required value="<?=$datos->imagen_url ?>">
          </div>
          

          <?php }
      ?>
      <BUtton type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar Categoria</BUtton>
  </form>
</body>
</html>