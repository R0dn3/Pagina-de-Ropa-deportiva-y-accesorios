<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
  <h1>Iniciar Sesión</h1>
  <form id="loginForm" action="verificar_user.php" method="POST">
    <div class="form-group">
      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Iniciar Sesión</button>
  </form>
</div>


</body>
</html>
