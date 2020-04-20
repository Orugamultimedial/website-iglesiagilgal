<?php
$categories = array();
$categories = conseguirActividades($db);

?>
<link rel="stylesheet" href="./css/modify_activities.css">
<link rel="stylesheet" href="./css/activities.css">
<div id="container_existingactivities">
    
    <div id='container_article'>
    <button class='buttons'>Crear</button>
        <?php    

        for ($i=0; $i < mysqli_num_rows($categories); $i++) {                  
                    $data = mysqli_fetch_assoc($categories);

                    //verify
                    $id = trim($data['id']);
                    $category = trim($data['category']);
                    $title = trim($data['title']);
                    $subtitle = trim($data['subtitle']);
                    $date = trim($data['date']);
                    $text = trim($data['text']);
                    $author = trim($data['author']);
                    $text = trim($data['text']);
                    $tags = trim($data['tags']);
                    
                    $image = trim($data['image']);
                    $image2 = trim($data['image2']);          
                    ?>

                    <form>
                        <ul>
                            
                            <li id='article'>
                                <form action="modify.php" method="post">
                                    <input type='file' name='imageNew' Value='Cambiar imagen'><br>
                                    <div id="div_article_header">

                                    <?php
                                        //verify images
                                        if(file_exists($image)){

                                            echo "<img src='$image'>";
                                            

                                        }else{
                                            //no existe la imagen;
                                        };
                                    ?>   
                                        <div id="div_article_header_info">
                                            <h1><?php echo $title ?></h1>
                                            <input type="text" name="titleNew" placeholder="Cambiar el título">
                                            <h2><?php echo $subtitle ?></h2>
                                            <input type="text" name="subtitleNew" placeholder="cambiar Subtitulo"> 
                                        </div> 
                                        
                                    </div>
                                    <div id="div_article_info">
        
                                        <textarea rows="5" cols="15" name="textNew" placeholder="<?php echo $text ?>"></textarea>
                                        <h4><?php echo $tags ?></h4>
                                        <input type="text" name="tagsNew" placeholder="Agregar tags">
                                        <h3><?php echo $author ?></h3>
                                        <input type="text" name="authorNew" placeholder="Modificar Author">
                                    </div>

                                    <input type="submit" value="Guardar" class="buttons">
                                <form> 
                            </li>
                        </ul>
                                                                               
                                                                                                              

                                    
                                    
                                        
                                    
                                    
                                    
                                    
                        
                                </form>

                            </li>
                        </ul>
                    
                    <?php
                    }
                    ?>
    </div>
</div>