<?php
    //$results=listReservations($db);
?>
<div class="home">
    <div class="content">
        <!-- Currently used for testing the database
        <?php foreach($results as $result):?>
            <div>
                ID: <?php echo $result['id'];?>
            </div>
            <div>
                Client Name: <?php echo $result['clientName'];?>
            </div>
            <div>
                Client Phone: <?php echo $result['clientPhone'];?>
            </div>
            <div>
                Party Size: <?php echo $result['partySize'];?>
            </div>
            <div>
                Reservation Date: <?php echo $result['reservationDate'];?>
            </div>
        <?php endforeach;?>
        -->
        <h1>FOOD PALACE</h1>
        <button type="button" class="menuButton">
            <a href="<?= page_url('menu')?>"> MENU </a>
        </button>
    </div>
</div>