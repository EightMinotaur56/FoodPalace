<?php
    $menuItems=getMenu($db);
    session_start();
    $previousPage=$_SESSION['current_page'];
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $_SESSION['current_page']=$query;
    }
?>
<div class="fullMenu">
    <h1>Menu</h1>
    <div class="content">
        <?php foreach($menuItems as $item):?>
            <img src="<?= asset_url($item['imageURL'])?>" alt="">
        <?php endforeach;?>
    </div>
