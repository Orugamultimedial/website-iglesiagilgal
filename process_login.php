<link rel="stylesheet" href="./css/login.css">
<?php
$error = true;

if(isset($_POST['user']) && isset($_POST['pass'])){
$error = false;
}else{
    $error = true;
}

$user = $_POST['user'];
$pass = $_POST['pass'];

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
require('./includes/header.php');


if($error == false){
    echo "<div id='container_login'>";
    echo "  <div id='login'>";
    echo "    <img src='./img/check_ok.png' alt='check ok'><h1>identificado</h1>";
    echo "    <br>";
    echo "    <h4>Hola $user, Bienvenido!</h4>";
    echo "  </div>"; 
    echo "</div>"; 
    header( "Refresh:2; url=./administration.php?login=ok&user=$user", true, 303);
}else{
echo `
   <div id='container_login'>
        <div id='login'>
        <img src="./img/check_fail.png" alt="check ok"><h1>Hay un error</h1>
        </div> 
    </div>`;
};
?>




    
</body>
</html>