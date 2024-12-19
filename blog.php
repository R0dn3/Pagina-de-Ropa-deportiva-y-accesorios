<?php 
include "header.php";
?>
    <link rel="stylesheet" href="css/blog.css">
    <div class="blog1">
<h1 >Blog</h1>


<div class="comenta">
  <h2>Deja tu opinion acerca de nuestro Servicio</h2>
  <textarea id="texto" placeholder="Escribe un comentario aquí"></textarea>
  <button onclick="añadir()">Enviar</button>
</div>


<div class="comemtarios">
  <h2>Comentarios</h2>
  <ul id="Lista"></ul>
</div>
</div>
<?php 
include "footer.php";
?>
