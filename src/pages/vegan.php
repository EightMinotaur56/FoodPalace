<?php
    $vegans=getVegan($db);
?>
<div class="vegan">
    <h1>VEGAN CATEGORY</h1>
    <div class="content">
        <?php foreach($vegans as $vegan):?>
            <img src="<?=$vegan['imageURL']?>" alt="">
        <?php endforeach;?>
    </div>
</div>