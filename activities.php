<?php
require('./includes/header.php');
require('./helpers.php');
require('./includes/facebook_live.php');
require('./includes/social_buttons.php');
require('./includes/radio_online.php');
require('./includes/contact.php');


?>
</div>
<div style="width:80%;display:inline-flex;margin-left:auto;margin-right">

    <div style="width:30%">
        <?php
        require('./includes/schedule.php');
        ?>
    </div>
    <div style="width:70%">
        <?php
        require('./includes/activities.php');
        ?>
    </div>

</div>

    
</body>
</html>