<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
    exit();
}

require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$id_mueble = $_POST['id_mueble'];

$consulta = "DELETE FROM mobiliario WHERE id_mueble = $id_mueble";

include '../header.php';
if ($conexion->query($consulta)) {
    echo "<h3 class='center-align green-text'>Mueble eliminado con éxito</h3>";
    echo "<div class='row center-align'>";
    echo "<a href='../Principal.php' class='btn blue'>Volver al listado</a>";
    echo "</div>";
} else {
    echo "<h3 class='center-align red-text'>Error al eliminar el mueble</h3>";
    echo "<div class='row center-align'>";
    echo "<a href='../Principal.php' class='btn red'>Intentar de nuevo</a>";
    echo "</div>";
}
include '../footer.php';
?>
