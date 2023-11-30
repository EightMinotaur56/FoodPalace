<?php
    $menuItems=getMenu($db);
?>
<div class="fullMenu">
    <h1>Menu</h1>
    <div class="content">
        <?php foreach($menuItems as $item):?>
            <img src="<?= asset_url($item['imageURL'])?>" alt="">
        <?php endforeach;?>
    </div>
</div>