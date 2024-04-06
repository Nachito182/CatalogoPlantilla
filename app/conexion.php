<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$database = "bd_producto";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Consulta para obtener los productos
$sql = "SELECT * FROM tb_producto";
$result = $conn->query($sql);

$productos = array();

// Obtener los resultados de la consulta y guardarlos en un array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

// Cerrar la conexión
$conn->close();
?>