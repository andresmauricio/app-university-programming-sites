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

$sql = "UPDATE producto 
        SET codigo_de_producto='$codigo',
                            nombre='$nombre',
                            marca='$marca',
                            precio_de_compra='$precio',
                            cantidad='$cantidad'
        WHERE codigo_de_producto='$codigo'";

if ($conn->query($sql) === TRUE) {
    echo "Producto creado correctamente";
    header("Location: ../edit_form.php");
} else {
    echo "Erro al actualizar el producto " . $conn->error;
}
