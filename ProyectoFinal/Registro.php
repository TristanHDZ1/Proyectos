<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location: ./index.php");
    exit();
}

include 'header.php';
?>
<h3 class="center-align">Registrar Mueble</h3>
<form action="./logica/enviarRegistro.php" method="post" class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="nombre" type="text" name="nombre" required>
            <label for="nombre">Nombre del mueble</label>
        </div>
        <div class="input-field col s6">
            <input id="tipo" type="text" name="tipo" required>
            <label for="tipo">Tipo</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="ubicacion" type="text" name="ubicacion" required>
            <label for="ubicacion">Ubicación</label>
        </div>
        <div class="input-field col s6">
            <input id="cantidad" type="number" name="cantidad" required>
            <label for="cantidad">Cantidad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="precio" type="number" step="0.01" name="precio" required>
            <label for="precio">Precio</label>
        </div>
    </div>
    <div class="row center-align">
        <button type="submit" class="btn green">Registrar</button>
        <a href="Principal.php" class="btn grey">Cancelar</a>
    </div>
</form>
<?php
include 'footer.php';
?>
