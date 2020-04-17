<?php
function conseguirArticulos($conection_db){
    $sql = "SELECT * FROM articles WHERE category ='jovenes'";
    $categoryArticles = mysqli_query($conection_db, $sql);

    $result = array();

    if($categoryArticles && mysqli_num_rows($categoryArticles) >= 1){
        $result = $categoryArticles;
    };
    return $result;
}

function conseguirActividades($conection_db){
    $sql = "SELECT * FROM articles WHERE category ='actividades'";
    $categoryActivities = mysqli_query($conection_db, $sql);

    $result = array();

    if($categoryActivities && mysqli_num_rows($categoryActivities) >= 1){
        $result = $categoryActivities;
    };
    return $result;
}

function conseguirAgenda($conection_db){
    $sqlLunes = "SELECT * FROM schedule WHERE day ='Lunes'";
    $lunes = mysqli_query($conection_db, $sqlLunes);

 /*   $sqlMartes = "SELECT * FROM schedule WHERE 'day' ='martes'";
    $martes = mysqli_query($conection_db, $sqlMartes);

    $sqlMiercoles = "SELECT * FROM schedule WHERE 'day' ='miercoles'";
    $miercoles = mysqli_query($conection_db, $sqlMiercoles);

    $sqlJueves = "SELECT * FROM schedule WHERE 'day' ='jueves'";
    $jueves = mysqli_query($conection_db, $sqlJueves;

    $sqlViernes = "SELECT * FROM schedule WHERE 'day' ='viernes'";
    $viernes = mysqli_query($conection_db, $sqlViernes);

    $sqlSabado = "SELECT * FROM schedule WHERE 'day' ='sabado'";
    $sabado = mysqli_query($conection_db, $sqlSabado;

    $sqlDomingo = "SELECT * FROM schedule WHERE 'day' ='domingo'";
    $domingo = mysqli_query($conection_db, $sqlDomingo;
  */  
    
    $resultLunes = array();
    $resultMartes = array();
    $resultMiercoles = array();
    $resultJueves = array();
    $resultViernes = array();
    $resultSabado = array();
    $resultDomingo = array();

    if($lunes && mysqli_num_rows($lunes) >= 1){
        $resultLunes = $lunes;
    };
/*    if($martes && mysqli_num_rows($martes) >= 1){
        $resultMartes = $martes;
    };
    if($miercoles && mysqli_num_rows($miercoles) >= 1){
        $resultMiercoles = $miercoles;
    };
    if($jueves && mysqli_num_rows($jueves) >= 1){
        $resultJueves = $lunes;
    };
    if($viernes && mysqli_num_rows($viernes) >= 1){
        $resultViernes = $viernes;
    };
    if($sabado && mysqli_num_rows($sabado) >= 1){
        $resultSabado = $sabado;
    };
    if($domingo && mysqli_num_rows($domingo) >= 1){
        $resultDomingo = $domingo;
    };*/
    return $resultLunes; //$resultMartes, $resultMiercoles, $resultJueves, $resultViernes, $resultSabado, $resultDomingo;
}
?>