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
        require('./includes/contact.php');
        require('./includes/facebook_live_url.php');
        ?>

        <div id='container_administration_info'></div>

    </body>
</html>

<script>
    login = document.getElementById('login_icon');
    logout = document.getElementById('logout_icon');
    
    login.style.display = 'none';
    logout.style.display = 'Block';

    
    function showFacebookUrl(){
        facebookUrl = document.getElementById('container_facebok_live_url');

        switch (facebookUrl.style.display) {
            case 'none':
                facebookUrl.style.display = 'block';  
                break;
            case 'block':
                facebookUrl.style.display = 'none';
        
            default:
            facebookUrl.style.display = 'none';
                break;
        };   
    };
</script>

    