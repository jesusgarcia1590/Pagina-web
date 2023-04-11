const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  
  // Obtener los valores de los campos de entrada
  const nombre = document.getElementById('nombre').value;
  const apellido = document.getElementById('apellido').value;
  const email = document.getElementById('email').value;
  const libro = document.getElementById('libro').value;
  const fecha = document.getElementById('fecha').value;
  
  // Validar que se hayan ingresado valores en todos los campos
  if (!nombre || !apellido || !email || !libro || !fecha) {
    alert('Por favor, complete todos los campos antes de enviar el formulario.');
    return;
  }
  
  // Enviar los datos del formulario al servidor
  // aquí podrías agregar tu propio código para enviar los datos a tu servidor de reservas
  alert('¡Gracias por reservar un libro!');
});
