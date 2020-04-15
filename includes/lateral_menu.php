<link rel="stylesheet" href="./css/lateral_menu.css">

<div id="lateral_menu">
    <nav>
        <img src="./img/user_icon.png" alt="user icon">
        <h3><?php $user ?></h3>
        <ul>
            <li>Modificar Inicio</li>
            <li>Modificar Nosotros</li>
            <li>Modificar Actividades</li>
            <li>Modificar Jóvenes</li>
            <li>Modificar Medios</li>
            <li>Modificar Usuario</li>
            <li onclick='createUser()'>Crear Usuario</li>
            <br>
            <li style='background-color:#1A7A67'>Anuncio</li>
            <li style='background-color:#BD081C'>Facebook Live</li>
        </ul>
    </nav>
</div>

<script>
    function createUser(){
        element = document.getElementById('create_user');
        
        if(element.style.display == 'none'){
            element.style.display = 'block';
        }else{
            element.style.display = 'none';
        };
        
    };
    
</script>