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
            <div class="box">
                <img src="<?=$dessert['imageURL']?>" alt="">
                <?php echo $dessert['name']; ?>
                <h6 style="margin-top:10px;margin-bottom:10px; max-width:270px;">
                    <?php echo wordwrap($dessert['description'],20,"<br>");?>
                </h6>
                <?php echo '$'.$dessert['cost']; ?>
            </div>
        <?php endforeach;?>
    </div>
    