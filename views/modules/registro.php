<h1>Registro de usuario</h1>

<form method="post">
    <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
    <input type="text" class="form-control" placeholder="Contraseña" name="password" required>
    <input type="text" class="form-control" placeholder="Email" name="email" required>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>

<?php

    $registro = new MvcController();
    $registro ->registroUsuarioController();


 ?>
