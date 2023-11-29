<?php
    $mains=getMain($db);
?>
<div class="main">
    <h1>MAINS</h1>
    <div class="content">
        <?php foreach($mains as $main):?>
            <div class="image"></div>
        <?php endforeach;?>
    </div>
</div>