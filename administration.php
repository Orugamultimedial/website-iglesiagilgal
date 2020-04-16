<?php
$name = $_GET['name'];
$surname = $_GET['surname'];
?>

<link rel="stylesheet" href="./css/login.css">

    <body>
        <?php
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

<script>
    login = document.getElementById('login_icon');
    logout = document.getElementById('logout_icon');
    
    login.style.display = 'none';
    logout.style.display = 'Block';
</script>

    