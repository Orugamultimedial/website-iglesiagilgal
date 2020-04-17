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
?>