<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "bdunad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Fallo en la conexión" . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS Producto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo_de_producto INT NOT NULL,
    nombre VARCHAR(45) NOT NULL,
    marca VARCHAR(45) NOT NULL,
    precio_de_compra INT NOT NULL,
    cantidad INT NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} else {
  echo "Erro al crear la tabla " . $conn->error;
}

$conn->close();
?> 