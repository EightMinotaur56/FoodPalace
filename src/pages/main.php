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
    <h1>MAINS COURSE</h1>
    <div class="content">
        <?php foreach($mains as $main):?>
            <div class="box">
                <img src="<?=$main['imageURL']?>" alt="">
                <?php echo $main['name']; ?>
                <h6 style="margin-top:10px;margin-bottom:10px; max-width:270px;">
                    <?php echo wordwrap($main['description'],20,"<br>");?>
                </h6>
                <?php echo '$'.$main['cost']; ?>
            </div>
        <?php endforeach;?>
    </div>
    