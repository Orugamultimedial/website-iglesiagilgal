<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/administration.css">

    <body>
        <?php
        require('./includes/header.php');
        require('./helpers.php');
        require('./includes/radio_online.php');
        require('./includes/social_buttons.php');
        require('./includes/lateral_menu.php');
        require('./includes/create_user.php');
        require('./includes/contact.php');
        require('./includes/facebook_live_url.php');
        ?>

        <div id='container_administration_info'>
        <?php
        require('./includes/modify_activities.php');
        ?>
        </div>

    </body>
</html>

<script>
    login = document.getElementById('login_icon');
    logout = document.getElementById('logout_icon');
    
    login.style.display = 'none';
    logout.style.display = 'Block';

</script>

    