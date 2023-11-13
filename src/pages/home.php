<?php
    $db=db_connect();

    $select=$db->prepare("SELECT * FROM reservations");
    $select->execute();
    $results=$select->fetchAll(PDO::FETCH_ASSOC);
?>

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