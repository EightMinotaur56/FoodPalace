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
    <?php foreach($menuItems as $menu):?>
            <div class="box">
                <img src="<?=$menu['imageURL']?>" alt="">
                <?php echo $menu['name']; ?>
                <h6 style="margin-top:10px;margin-bottom:10px; max-width:270px;">
                    <?php echo wordwrap($menu['description'],20,"<br>");?>
                </h6>
                <?php echo '$'.$menu['cost']; ?>
            </div>
        <?php endforeach;?>
    </div>
