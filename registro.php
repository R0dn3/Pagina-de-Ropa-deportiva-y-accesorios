<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Usuario</title>
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css >
<link rel="stylesheet" href="css/registro.css">

</head>
<body>
<div class="contenedor">
  <h1>Registro de Usuario</h1>
  <form id="registro" method="POST" action="registrar_user.php">
    <div class="grupo">
      <label for="firstName">Nombre:</label>
      <input type="text" id="firstName" name="firstName" required>
    </div>
    <div class="grupo">
      <label for="lastName">Apellido:</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>
    <div class="grupo">
      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="grupo">
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="grupo">
      <label for="confirmPassword">Repite Contraseña:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
    </div>
    <button type="registrarse">Registrarse</button>
  </form>
</div>

</body>
</html>


