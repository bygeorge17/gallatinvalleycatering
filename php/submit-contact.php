<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si se estableció la conexión correctamente
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtiene los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepara la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

// Ejecuta la consulta SQL y verifica si se realizó correctamente
if ($conn->query($sql) === TRUE) {
  echo "Form submitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
