<?php
$error = true;

if(isset($_POST['username']) && isset($_POST['password'])){
$error = false;
}else{
    $error = true;
}


$username = $_POST['username'];
$password = $_POST['password']
?>

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
require('header.php');

if($error == false){?>
    <div id='container_login'>
        <div id='login'>
            <img src="./img/check_ok.png" alt="check ok"><h1>identificado</h1>
            <br>
            <h2>Hola <?php $username ?>, Bienvenido!</h2>
        </div> 
    </div> <<?php 
    header("location:index.php?login=ok",3);
}else{?>
   <div id='container_login'>
        <div id='login'>
        <img src="./img/check_fail.png" alt="check ok"><h1>Hay un error</h1>
        </div> 
    </div><?php
};
?>




    
</body>
</html>