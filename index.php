<?php
require('./includes/header.php');
require('./includes/facebook_live.php');
require('./includes/radio_online.php');
require('./includes/social_buttons.php');

?>

    <div>
        <?php
        require('./includes/lateral_bar.php');
        require('./includes/info_index.php');
        ?>
    </div>


</body>
</html>

<!--script>
    var foo="<?php echo $status ?>";
    console.log("es:"+foo);

    if(foo == 'ok'){
        login = document.getElementById('login_icon');
        logout = document.getElementById('logout_icon');
        login.style.display = 'none';
        logout.style.display = 'Block';
    }else{
        console.log('Usuario Anónimo');
    }
</!--script>