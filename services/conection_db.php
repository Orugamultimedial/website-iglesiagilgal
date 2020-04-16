<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'iglesiagilgal';

$db = mysqli_connect($server, $username, $password, $database);


//para que reciba ñ o tildes
mysqli_query($db, "SET NAMES 'UTF-8' ");

//SESSION START
session_start();
?>