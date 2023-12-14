<?php
    $errors=[];
    $clientName=$_POST['clientName']??null;
    $clientPhone=$_POST['clientPhone']??null;
    $partySize=$_POST['partySize']??null;
    $reservationDate=$_POST['reservationDate']??null;
    $time=$_POST['time']??null;

    /*if(is_post()){
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
    }*/
?>


<section class="reservation" id="reservation">

   <form action="" method="post">
      <h3>make a reservation</h3>
      <div class="flex">
         <div class="box">
            <p>your name <span>*</span></p>
            <input type="text" name="name" maxlength="50" required placeholder="enter your name" class="input">
         </div>
         <div class="box">
            <p>your email <span>*</span></p>
            <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="input">
         </div>
         <div class="box">
            <p>your number <span>*</span></p>
            <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
         </div>
         
         </div>
         <div class="box">
            <p>check-in <span>*</span></p>
            <input type="date" name="check_in" class="input" required>
         </div>
         <div class="box">
            <p>time <span>*</span></p>
            <select name="time" class="input"  required>
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
      </div>
      <input type="submit" value="book now" name="submit" class="btn">
   </form>

</section>








