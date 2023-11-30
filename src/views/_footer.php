<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) .
    $_SERVER['REQUEST_URI'];
    $page=explode("=",$link);
    $page=$page[1];
    $category=$_POST['category']??null;
    $previous=explode('=',$previousPage)[1];
?>
<?php if($page==='vegan'|| $page==='desserts'||$page==='main'||$page==='fullMenu'):?>
    <div style="display: flex;flex-driection:column;">
    <?php if($previous!=='menu'):?>
    <a href="<?=page_url('menu')?>"><button type="button" class='footerNavButton'>Menu Category Seletion</button></a>
    <?php endif;?>
    <a href="<?=page_url($previous)?>"><button type="button" class='footerNavButton'>Go Back</button></a>
    <?php if($page!=='vegan'):?>
        <a href="<?=page_url('vegan')?>"><button type="button" class='footerNavButton'>Vegan</button></a>
    <?php endif;?>
    <?php if($page!=='main'):?>
        <a href="<?=page_url('main')?>"><button type="button" class='footerNavButton'>Main</button></a>
    <?php endif;?>
    <?php if($page!=='desserts'):?>
        <a href="<?=page_url('desserts')?>"><button type="button" class='footerNavButton'>Desserts</button></a>
    <?php endif;?>
    <?php if($page!=='fullMenu'):?>
        <a href="<?=page_url('fullMenu')?>"><button type="button" class='footerNavButton' style="width:max-content">Complete Menu</button></a>
    <?php endif;?>
    </div>
<?php endif;?>
</div>
</body>

</html>
