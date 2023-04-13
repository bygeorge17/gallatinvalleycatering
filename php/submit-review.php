<?php
// Variables para conectar a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contrasena";
$dbname = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];

// Preparar la consulta SQL
$sql = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  echo "Review added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
