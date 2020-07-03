<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Fallo en la conexión" . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS bdunad";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada correctamente";
} else {
  echo "Erro al crear la base de datos " . $conn->error;
}

$conn->close();
?> 