<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location: ./index.php");
    exit();
}

include 'header.php';
?>
<h3 class="center-align">Eliminar Mueble</h3>
<form method="POST" action="./logica/deleteMueble.php" class="col s12">
    <div class="row">
        <div class="input-field col s12">
            <input id="id_mueble" type="number" name="id_mueble" required>
            <label for="id_mueble">ID del mueble</label>
        </div>
    </div>
    <div class="row center-align">
        <button type="submit" class="btn red">Eliminar</button>
        <a href="Principal.php" class="btn grey">Cancelar</a>
    </div>
</form>
<?php
include 'footer.php';
?>
