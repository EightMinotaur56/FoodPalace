<?php
    $vegans=getVegan($db);
    session_start();
    $previousPage=$_SESSION['current_page'];
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $_SESSION['current_page']=$query;
    }
?>
<div class="vegan">
    <h1>VEGAN CATEGORY</h1>
    <div class="content">
        <?php foreach($vegans as $vegan):?>
            <img src="<?=$vegan['imageURL']?>" alt="">
        <?php endforeach;?>
    </div>
