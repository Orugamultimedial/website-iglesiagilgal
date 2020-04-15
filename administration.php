<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/login.css">
        <script src="main.js"></script>
    </head>
    <body>



        <?php
        $user = $_GET['user'];
        require('./includes/header.php');
        require('./includes/radio_online.php');
        require('./includes/social_buttons.php');
        require('./includes/lateral_menu.php');
        require('./includes/create_user.php');
        ?>
        <div id='container_administration_info'>

        </div>
    </body>
</html>

    