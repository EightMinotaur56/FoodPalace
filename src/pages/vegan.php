<?php
    $vegans=getVegan($db);
?>
<div class="vegan">
    <h1>VEGAN CATEGORY</h1>
    <div class="content">
        <?php foreach($vegans as $vegan):?>
            <div class="image"></div>
        <?php endforeach;?>
    </div>
</div>