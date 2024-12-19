
document.getElementById('registro').addEventListener('registrarse', function(event) {
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  
  if (password !== confirmPassword) {
    alert('Las contraseñas no coinciden');
    event.preventDefault();
  }

});




