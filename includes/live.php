<?php 
require('../services/conection_db.php');
require('../helpers.php');

$url = array();
$url = conseguirUrl($db);

$data = mysqli_fetch_assoc($url);

//verify
$urlNew = trim($data['url']);
?>

<div >
    <?php echo $urlNew ?>
</div>

