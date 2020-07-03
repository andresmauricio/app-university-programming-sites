<?php
$nombre   = $_POST['nombre'];
$codigo   = $_POST['codigo'];
$marca    = $_POST['marca'];
$precio   = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bdunad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Fallo en la conexión" . $conn->connect_error);
}

$sql = "INSERT INTO Producto(
        id,
        codigo_de_producto,
        nombre,
        marca,
        precio_de_compra,
        cantidad)
        VALUES (
            NULL,
            '$codigo',
            '$nombre',
            '$marca',
            '$precio',
            '$cantidad'
        )";

if ($conn->query($sql) === TRUE) {
    header("Location: ../create_form.php");
} else {
    echo "Error al crear el producto " . $conn->error;
}