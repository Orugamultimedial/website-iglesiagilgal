<?php
require('./includes/header.php');
require('./includes/social_buttons.php');
?>

<link rel="stylesheet" href="./css/login.css">

<div id='container_login'>
<img id="logo_login" src="./img/logo_iglesia_gilgal.png" alt="Logo Iglesia Gilgal">
    <div id='login'>
        <h1>LogIn</h1>
        <form action="./process_login.php" method="post">
            <input type="text" placeholder='Nombre de usuario / e-mail' id="user" name="user" required>
            <span class='error-span' id='error-input-username'>Ingresa un Usuario</span>
            <input type="text" placeholder='Contraseña' id="pass" name="pass" required>
            <span class='error-span' id='error-input-password'>Ingresa tu contraseña</span>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</div>

    
</body>
</html>