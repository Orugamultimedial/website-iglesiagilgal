<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="main.js"></script>
</head>
<body>
<?php
require('./includes/header.php');
require('./includes/social_buttons.php');

?>

<div id='container_login'>
    <div id='login'>
        <h1>LogIn</h1>
        <form action="process_login.php" method="post">
            <input type="text" placeholder='Nombre de usuario / e-mail' id="username" name="username" required>
            <span class='error-span' id='error-input-username'>Ingresa un Usuario</span>
            <input type="text" placeholder='Contraseña' id="password" name="password" required>
            <span class='error-span' id='error-input-password'>Ingresa tu contraseña</span>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</div>


    
</body>
</html>