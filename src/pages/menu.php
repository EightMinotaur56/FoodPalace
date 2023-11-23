<?php
    $vegan=getVegan($db);
?>
<div class="menu">
    <div class="content">
        <?php foreach($vegan as $food):?>
            <?php
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo $food['name'];    
                echo '<br>';
                echo $food['description']; 
                echo '<br>';
                echo '<img src="'. asset_url($food['imageURL']).'" alt="falafel Image">'
            ?>
        <?php endforeach;?>
    </div>
</div>