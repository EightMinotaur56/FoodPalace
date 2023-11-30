<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) .
    $_SERVER['REQUEST_URI'];
    $page=explode("=",$link);
    $page=$page[1];
    $category=$_POST['category']??null;
?>
<?php if($page==='vegan'|| $page==='desserts'||$page==='main'||$page==='fullMenu'):?>
    <div style="display: flex;flex-driection:column;">
    <a href="<?=page_url('menu')?>"><button type="button" class='goToFullMenu'>Back To Menu Page</button></a>
    </div>
<?php endif;?>
</div>
</body>

</html>
