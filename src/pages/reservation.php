<?php
   /* $errors=[];
    $clientName=$_POST['clientName']??null;
    $clientPhone=$_POST['clientPhone']??null;
    $partySize=$_POST['partySize']??null;
    $reservationDate=$_POST['reservationDate']??null;
    $time=$_POST['time']??null;*/


    if (isset($_POST['reserve'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $guests = filter_var($_POST['guests'], FILTER_SANITIZE_STRING);
        $check_in = filter_var($_POST['check_in'], FILTER_SANITIZE_STRING);
        $time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
      
     
        $total = 0;
        $check_bookings = $connect->prepare("SELECT * FROM `reservations` WHERE check_in =?");
     
        try {
            $check_bookings->execute([$check_in]);
            while ($fetch_bookings = $check_bookings->fetch(PDO::FETCH_ASSOC)) {
                $total += $fetch_bookings['guests'];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
     
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
     
        if ($total >= 20) {
            echo "<script>
                   document.addEventListener('DOMContentLoaded', function() {
                       Swal.fire({
                           icon: 'warning',
                           title: 'No tables Available',
                           text: 'We have no rooms available.',
                       });
                   });
               </script>";
        } else {
            $verify_bookings = $connect->prepare("SELECT * FROM `reservation` WHERE user_id = ? AND name = ? AND number = ? AND guests = ? AND check_in = ? AND time=?");
            $verify_bookings->execute([$user_id, $name, $number, $guests, $check_in,  $time]);
     
            if ($verify_bookings->rowCount() > 0) {
                echo "<script>
                       document.addEventListener('DOMContentLoaded', function() {
                           Swal.fire({
                               icon: 'warning',
                               title: 'Booking Error',
                               text: 'You already have a booking with these details.',
                           });
                       });
                   </script>";
            } else {
                $booking_id = create_unique_id(); 
                $book_room = $connect->prepare("INSERT INTO `reservation` (reservation_id, user_id, name,  number, guests, check_in, time) VALUES (?, ?, ?, ?, ?)");
                $book_room->execute([$reservation_id, $user_id, $name,  $number, $guests, $check_in, $time, $adults, $children]);
     
                echo "<script>
                       document.addEventListener('DOMContentLoaded', function() {
                           Swal.fire({
                               icon: 'success',
                               title: 'Room successfully booked',
                               text: 'Room successfully booked.',
                           });
                       });
                   </script>";
            }
        }
     }


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

<div class="container">
    <div class="reservationsPage">
    <div class="boxes">
            <div class="interior"> 
    <section class="reservation" id="reservation">
    <form action="" method="post">
      <h3>make a reservation</h3>
      <div class="flex">
         <div class="box">
            <p>your name <span>*</span></p>
            <input type="text" name="name" maxlength="40" required placeholder="enter your name" class="input">
         </div>
        
         <div class="box">
            <p>your number  <span>*</span></p>
            <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
         </div>
         <div class="box" >
                        <p>How many guests? <style></style></p>
                        <input type="number" name="guests" value="<?= $partySize?>" placeholder="1">
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
      <input type="submit" value="reserve" name="reserve" class="btn">
   </form>

</section>
</div>
        </div>
</div>
</div>






