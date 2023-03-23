// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crea la conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if (!$conn) {
  die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}



// Obtén los valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$libro = $_POST['libro'];
$fecha = $_POST['fecha'];

// Escapa los valores para prevenir ataques de inyección de SQL
$nombre = mysqli_real_escape_string($conn, $nombre);
$apellido = mysqli_real_escape_string($conn, $apellido);
$email = mysqli_real_escape_string($conn, $email);
$libro = mysqli_real_escape_string($conn, $libro);
$fecha = mysqli_real_escape_string($conn, $fecha);

// Crea la consulta SQL para insertar los datos en la tabla "reservas"
$sql = "INSERT INTO reservas (nombre, apellido, email, libro, fecha)
        VALUES ('$nombre', '$apellido', '$email', '$libro', '$fecha')";

// Ejecuta la consulta SQL y verifica si fue exitosa
if (mysqli_query($conn, $sql)) {
  echo "Reserva realizada con éxito.";
} else {
  echo "Error al realizar la reserva: " . mysqli_error($conn);
}
