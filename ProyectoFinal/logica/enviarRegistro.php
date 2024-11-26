<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
    exit();
}

require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$consulta = "INSERT INTO mobiliario (nombre, tipo, ubicacion, cantidad, precio) VALUES ('$nombre', '$tipo', '$ubicacion', $cantidad, $precio)";

include '../header.php';
if ($conexion->query($consulta)) {
    echo "<h3 class='center-align green-text'>Mueble registrado con éxito</h3>";
    echo "<div class='row center-align'>";
    echo "<a href='../Registro.php' class='btn green'>Registrar otro mueble</a>";
    echo "<a href='../Principal.php' class='btn blue'>Ver mobiliario</a>";
    echo "</div>";
} else {
    echo "<h3 class='center-align red-text'>Error al registrar el mueble</h3>";
    echo "<div class='row center-align'>";
    echo "<a href='../Registro.php' class='btn red'>Intentar de nuevo</a>";
    echo "</div>";
}
include '../footer.php';
?>
