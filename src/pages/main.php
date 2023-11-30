<?php
    $mains=getMain($db);
    session_start();
    $previousPage=$_SESSION['current_page'];
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $_SESSION['current_page']=$query;
    }
?>
<div class="main">
    <h1>MAINS</h1>
    <div class="content">
        <?php foreach($mains as $main):?>
            <img src="<?=$main['imageURL']?>" alt="">
        <?php endforeach;?>
    </div>
    