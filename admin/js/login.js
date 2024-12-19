document.getElementById('loginForm').addEventListener('submit', function(event) {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  
  // Aquí hara la validación del correo electrónico y la contraseña
 
  if (email === 'correo@example.com' && password === 'contraseña') {
    alert('Inicio de sesión exitoso');
  } else {
    alert('Correo electrónico o contraseña incorrectos');
    event.preventDefault();
  }
});
