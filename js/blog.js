// Array para almacenar los comentarios
let comentarios = [];

// Función para añadir un comentario
function añadir() {
  let texto = document.getElementById('texto').value;
  if (texto .trim() !== '') {
    comentarios.push(texto );
    actualizar();
  }
  document.getElementById('texto').value = '';
}

// Función para actualizar la lista de comentarios
function actualizar() {
  let Lista = document.getElementById('Lista');
  Lista.innerHTML = '';
  comentarios.forEach(function(comentario) {
    let li = document.createElement('li');
    li.textContent = comentario;
    Lista.appendChild(li);
  });
}