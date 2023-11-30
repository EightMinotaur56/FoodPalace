<?php
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) .
    $_SERVER['REQUEST_URI'];
    $page=explode("=",$link);
    $page=$page[1];
?>
<?php if($page==='vegan'|| $page==='desserts'||$page==='main'||$page==='fullMenu'):?>
    <a href="<?=page_url('menu')?>"><button type="button" class='goToFullMenu'>Back To Menu Page</button></a>
<?php endif;?>
</div>
</body>

</html>
