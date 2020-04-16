<?php
require('./includes/header.php');
?>
<link rel="stylesheet" href="./css/login.css">
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
    if(isset($_POST)){
            
            $user = trim($_POST['user']);
            $pass = trim($_POST['pass']);

            //user data
            $sql = "SELECT * FROM users WHERE username = '$user'";
            $login = mysqli_query($db, $sql);
            

            if($login && mysqli_num_rows($login) == 1){
                    
                    $usuario = mysqli_fetch_assoc($login);

                    //password verify
                    $verify = password_verify($pass, $usuario['password']);

                    if($verify){

                        $_SESSION['user'] = $usuario;
                        $name = $_SESSION['user']['name'];
                        $surname = $_SESSION['user']['surname'];
                    

                        echo "<div id='container_login'>";
                        echo "  <div id='login'>";
                        echo "    <img src='./img/check_ok.png' alt='check ok'><h1>identificado</h1>";
                        echo "    <br>";
                        echo "    <h4>Hola $name, Bienvenido!</h4>";
                        echo "  </div>"; 
                        echo "</div>"; 
                        header( "Refresh:2; url=./administration.php?name=$name&surname=$surname", true, 303);


                        if(isset($_SESSION['error_login'])){
                            session_unset($_SESSION['error_login']);
                        }else{
                            echo 'No existe la clase Error_login';
                        }


                    }else{
                        $_SESSION['error_login'] = "Login Incorrecto";
                        $error_session = $_SESSION['error_login'];

                        echo  "<div id='container_login'>";
                        echo        "<div id='login'>";
                        echo            "<img src='./img/check_fail.png' alt='check ok'>";
                        echo            "<h2 style='color:white'>Hay un error $error_session</h2>";
                        echo  "     </div>"; 
                        echo  "</div>";
                    }

            }else{
                echo  "<div id='container_login'>";
                echo        "<div id='login'>";
                echo            "<img src='./img/check_fail.png' alt='check ok'>";
                echo            "<h2 style='color:white'>Error al consultar la db</h2>";
                echo  "     </div>"; 
                echo  "</div>";
            }
    }else{
        echo  "<div id='container_login'>";
        echo        "<div id='login'>";
        echo            "<img src='./img/check_fail.png' alt='check ok'>";
        echo            "<h2 style='color:white'>error al recibir la variable por POST</h2>";
        echo  "     </div>"; 
        echo  "</div>";
    }
?>
 
    
</body>
</html>