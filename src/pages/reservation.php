<?php
    $errors=[];
    $clientName=$_POST['clientName']??null;
    $clientPhone=$_POST['clientPhone']??null;
    $partySize=$_POST['partySize']??null;
    $reservationDate=$_POST['reservationDate']??null;
    $time=$_POST['time']??null;

    if(is_post()){
        if(!$clientName){
            $errors['clientName'][]="Please give your name";
        }
        if(!$clientPhone){
            $errors['clientName'][]="Please give a phone number we can contact you with";
        }
        if(!$partySize){
            $errors['clientName'][]="Please the size of your party";
        }
        if(!$reservationDate){
            $errors['clientName'][]="Please choose a date";
        }
        if(!$time){
            $errors['clientName'][]="Please choose a time";
        }

        if(count($errors)===0){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            $fullDate=$reservationDate . ' '. $time;

            addReservation($clientName,$clientPhone,$partySize,$fullDate,$db);
        }
    }
?>

<div class="container">
    <div class="reservationsPage">
        <div class="box">
            <div class="interior">
                <form method="post">
                    <div>
                        <input type="text" name="clientName" value="<?= $clientName?>" placeholder="Name">
                    </div>
                    <div>
                        <input type="text" name="clientPhone" value="<?= $clientPhone?>" placeholder="Phone Number">
                    </div>
                    <div>
                        <label for="partySize">How many guests?</label>
                        <input type="number" name="partySize" value="<?= $partySize?>" placeholder="1">
                    </div>
                    <div>
                        <input type="date" name="reservationDate" value="<?= $reservationDate?>">
                    </div>
                    <div>
                        <input type="time" name="time" value="<?= $time?>">
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
