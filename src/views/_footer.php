<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) .
    $_SERVER['REQUEST_URI'];
    $page=explode("=",$link);
    $page=$page[1];
    $category=$_POST['category']??null;
    $previous='';
    if(isset($previousPage)){
        $previous=explode('=',$previousPage)[1];
    }

    $isFirst=false;
    if($previous==='menu'){
        $isFirst=true;
    }
    $cssFirst='footerNavButtonFirst';
    if(!$isFirst){
        $cssFirst='footerNavButton';
    }
    $cssLast='footerNavButton';
    if($page==='fullMenu'){
        $cssLast='footerNavButtonLast';
    }
?>
<?php if($page==='vegan'|| $page==='desserts'||$page==='main'||$page==='fullMenu'):?>
    <div class="outerBtn">
    <div class="btnWrap" style="display: flex;flex-driection:column;">
    <?php if($previous!=='menu'):?>
    <a href="<?=page_url('menu')?>"><button type="button" class='footerNavButtonFirst' style="width:max-content">Menu Category Seletion</button></a>
    <?php endif;?>
    <a href="<?=page_url($previous)?>"><button type="button" class='<?=$cssFirst?>'>Go Back</button></a>
    <?php if($page!=='vegan'):?>
        <a href="<?=page_url('vegan')?>"><button type="button" class='footerNavButton'>Vegan</button></a>
    <?php endif;?>
    <?php if($page!=='main'):?>
        <a href="<?=page_url('main')?>"><button type="button" class='footerNavButton'>Main</button></a>
    <?php endif;?>
    <?php if($page!=='desserts'):?>
        <a href="<?=page_url('desserts')?>"><button type="button" class='<?=$cssLast?>'>Desserts</button></a>
    <?php endif;?>
    <?php if($page!=='fullMenu'):?>
        <a href="<?=page_url('fullMenu')?>"><button type="button" class='footerNavButtonLast' style="width:max-content">Complete Menu</button></a>
    <?php endif;?>
    </div>
    </div>
<?php endif;?>
</div>
</body>

</html>
