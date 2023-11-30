<?php
    $desserts=getDesserts($db);
?>
<div class="desserts">
    <h1>DESSERTS</h1>
    <div class="content">
        <?php foreach($desserts as $dessert):?>
            <img src="<?=$dessert['imageURL']?>" alt="">
        <?php endforeach;?>
    </div>
    