<?php
$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "75891100";
$db_name = "tienda_mobiliario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    echo "<h1>Error de conexión a la base de datos</h1>";
}
?>
