<?php
require "conexion.php";
session_start();

$admin_id = $_POST['admin_id'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar FROM administradores WHERE admin_id = '$admin_id' AND clave = '$clave'";
$resultado = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($resultado);

if ($array['contar'] > 0) {
    $_SESSION['admin'] = $admin_id;
    header("location: ../Principal.php");
} else {
    header("location: ../indexError.php");
}
?>
