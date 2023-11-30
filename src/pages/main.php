<?php
    $mains=getMain($db);
?>
<div class="main">
    <h1>MAINS</h1>
    <div class="content">
        <?php foreach($mains as $main):?>
            <img src="<?=$main['imageURL']?>" alt="">
        <?php endforeach;?>
    </div>
    