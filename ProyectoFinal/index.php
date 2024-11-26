<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("location: Principal.php");
    exit();
}
include 'header.php';
?>
<h3 class="center-align">Inicio de Sesión</h3>
<div class="row center-align">
    <img src="user_image.png" alt="User Icon" style="width: 120px; height: 120px; margin-bottom: 20px;">
</div>
<form method="POST" action="logica/loguear.php" class="col s12">
    <div class="row">
        <div class="input-field col s12">
            <input id="admin_id" type="text" name="admin_id" required>
            <label for="admin_id">ID Administrador</label>
        </div>
        <div class="input-field col s12">
            <input id="clave" type="password" name="clave" required>
            <label for="clave">Contraseña</label>
        </div>
    </div>
    <div class="row center-align">
        <button type="submit" class="btn blue">Iniciar Sesión</button>
    </div>
</form>
<?php
include 'footer.php';
?>
