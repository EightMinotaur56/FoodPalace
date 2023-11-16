<?php
    $results=listReservations($db);
?>
<div class="home">
    <div class="content">
        <p>Home Page!</p>
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
    </div>
</div>