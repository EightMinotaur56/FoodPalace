<?php
    $desserts=getDesserts($db);
    session_start();
    $previousPage=$_SESSION['current_page'];
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $_SESSION['current_page']=$query;
    }   
?>
<div class="desserts">
    <h1>DESSERTS</h1>
    <div class="content">
        <?php foreach($desserts as $dessert):?>
            <img src="<?=$dessert['imageURL']?>" alt="">
        <?php endforeach;?>
    </div>
    