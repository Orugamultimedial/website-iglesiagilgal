<?php 
session_start();

?>
<link rel="stylesheet" href="./css/lateral_menu.css">

<div id="lateral_menu">
    <nav>
        <img src="./img/user_icon.png" alt="user icon">
        <h4>Bienvenido</h4>
        <ul>
            <li>Modificar Inicio</li>
            <li>Modificar Nosotros</li>
            <li onclick='modifyActivities()'>Modificar Actividades</li>
            <li>Modificar Jóvenes</li>
            <li>Modificar Medios</li>
            <li>Modificar Usuario</li>
            <li onclick='createUser()'>Crear Usuario</li>
            <br>
            <li style='background-color:#1A7A67'>Anuncio</li>
            <li style='background-color:#BD081C' onclick="showFacebookUrl()">Facebook Live</li>
        </ul>
    </nav>
</div>
