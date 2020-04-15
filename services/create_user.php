<?php
require('./conection_db.php');

$user = isset($_POST['user_create']) ? $_POST['user_create']: false;
$pass = isset($_POST['pass_create']) ? $_POST['pass_create']: false;
$name = isset($_POST['name_create']) ? $_POST['name_create']: false;
$surname = isset($_POST['surname_create']) ? $_POST['surname_create']: false;
$mail = isset($_POST['mail_create']) ? $_POST['mail_create']: false;


//array errors
$errors = array();
//validation
//user
if(!empty($user)){
    $user_validate = true;
}else{
    $user_validate = false;
    $errors['user'] = "El Usuario no es válido";
}
//pass
if(!empty($pass)){
    $pass_validate = true;
}else{
    $pass_validate =false;
    $errors['pass'] = "La contraseña no es válida";
}
//name
if(!empty($name)){
    $name_validate = true;
}else{
    $name_validate = false;
    $errors['name'] = "El nombre no es válido";
}
//surname
if(!empty($surname)){
    $surname_validate = true;
}else{
    $surname_validate = false;
    $errors['surname'] = "El Apellido no es válido";
}
//mail
//name
if(!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $mail_validate = true;
}else{
    $mail_validate = false;
    $errors['mail'] = "El E-mail no es válido";
}


if(count($errors) == 0){
    $insertNewUser = "INSERT INTO users VALUES ('DEFAULT','$user','$pass','$name','$surname','$mail','admin')";

    mysqli_query($db,$insertNewUser);
    
    $createUserOk = true;

}else{
    $createUserOk = false;
}





?>
<link rel="stylesheet" href="../css/login.css">
    <div id='login'>
        <h1>Usuario Creado</h1>
        <h4>Recuerda estos datos</h4>
        <h3 style="color:white">Username: <?php $user ?></h3>
        <h3 style="color:white">Password: <?php $pass ?></h3>
    </div>`;
<?php
header( "Refresh:5; url=../administration.php?createUserOk=$createUserOk&user=$user&pass=$pass", true, 303);


