<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // 🔒 Encriptar contraseña

$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contraseña')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>✅ Registro exitoso</h2>";
  echo "<a href='index.html'>Volver al inicio</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
