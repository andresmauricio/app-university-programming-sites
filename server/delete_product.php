<?php
$codigo   = $_POST['codigo'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bdunad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Fallo en la conexión" . $conn->connect_error);
}

$sql = "DELETE FROM producto WHERE codigo_de_producto='$codigo'";

if ($conn->query($sql) === TRUE) {
   header("Location: ../delete_form.php");
} else {
    echo "Erro al eliminar el producto " . $conn->error;
}