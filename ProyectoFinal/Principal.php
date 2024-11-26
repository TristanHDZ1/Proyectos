<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location: ./index.php");
    exit();
}

include 'header.php';

require "./logica/conexion.php";
mysqli_set_charset($conexion, 'utf8');

$consulta_sql = "SELECT * FROM mobiliario";
$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);

echo "<h3 class='center-align'>Listado de Mobiliario</h3>";
echo "<table class='striped centered'>
    <thead>
        <tr>
            <th>ID Mueble</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Ubicación</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>";

if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['id_mueble'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['tipo'] . "</td>";
        echo "<td>" . $row['ubicacion'] . "</td>";
        echo "<td>" . $row['cantidad'] . "</td>";
        echo "<td>$" . number_format($row['precio'], 2) . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<h5 class='red-text center-align'>No hay mobiliario registrado.</h5>";
}

echo "<div class='center-align'>
        <a href='Registro.php' class='btn green'>Registrar Mueble</a>
        <a href='EliminarMueble.php' class='btn red'>Eliminar Mueble</a>
    </div>";

echo "<div class='center-align' style='margin-top: 20px;'>
        <a href='logica/salir.php' class='btn grey darken-2'>Cerrar Sesión</a>
    </div>";

include 'footer.php';
?>
