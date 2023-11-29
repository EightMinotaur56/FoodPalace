<?php
    $desserts=getDesserts($db);
?>
<div class="desserts">
    <h1>DESSERTS</h1>
    <div class="content">
        <?php foreach($desserts as $dessert):?>
            <div class="image"></div>
        <?php endforeach;?>
    </div>
</div>