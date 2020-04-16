<?php
require('../services/conection_db');

    function listCategory(){
            $sql = "SELECT * FROM category ORDER BY id ASC";
            $category = mysqli_query($db, $sql);
            
            $result = array();

            if($category && mysqli_num_rows($category) >= 1){
                $result = $category;
            }

            return $result;
        };



?>