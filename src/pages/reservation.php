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
            $fullDate=$reservationDate.' '.$time;

            addReservation($clientName,$clientPhone,$partySize,$fullDate,$db);
        }
    }
?>

<div class="container">
    <div class="reservationsPage">
        <div class="box">
            <div class="interior">
                <form method="post">
                    <div class="name">
                        <input type="text" name="clientName" value="<?= $clientName?>" placeholder="Name">
                    </div>
                    <div class="name">
                        <input type="text" name="clientPhone" value="<?= $clientPhone?>" placeholder="Phone Number">
                    </div>
                    <div class="name">
                        <label for="partySize">How many guests?</label>
                        <input type="number" name="partySize" value="<?= $partySize?>" placeholder="1">
                    </div>
                    <div class="name">
                        <input type="date" name="reservationDate" value="<?= $reservationDate?>">
                    </div>
                    <div class="name">
                        <select name="time" style="min-width:200px">
                            <option value=""></option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                            <option value="21:30">21:30</option>
                            <option value="22:00">22:00</option>
                        </select>
                    </div>
                    <div>
                        <button 
                        class="submitButton"
                        type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
