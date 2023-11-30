<?php
    session_start();
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $_SESSION['current_page']=$query;
    }
    
?>
<div class="menu">
    <h1>OUR MENU</h1>
    <div class="content">
        <div class="box">
            <a href="<?=page_url('vegan')?>" class="a"><button type="button" class="button">Vegan</button></a>
        </div>
        <div class="box">
            <a href="<?=page_url('main')?>" class="a"><button type="button" class="button">Main</button></a>
        </div>
        <div class="box">
            <a href="<?=page_url('desserts')?>" class="a"><button type="button" class="button">Desserts</button></a>
        </div>
    </div>
    <a href="<?=page_url('fullMenu')?>"><button type="button" class='goToFullMenu'>Full Menu</button></a>
</div>