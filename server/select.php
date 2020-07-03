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

$sql = "SELECT * FROM Producto WHERE codigo_de_producto='$codigo' ";
$resultado=mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado)>0){
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
    $_SESSION['id']= $fila['id'];
    $_SESSION['codigo_de_producto']= $fila['codigo_de_producto'];
    $_SESSION['nombre']= $fila['nombre'];
    $_SESSION['marca']= $fila['marca'];
    $_SESSION['precio_de_compra']= $fila['precio_de_compra'];
    $_SESSION['cantidad']= $fila['cantidad'];
    header("Location: ../select_form.php");
}
else{
    echo "NO HAY RESULTADOS";
}
