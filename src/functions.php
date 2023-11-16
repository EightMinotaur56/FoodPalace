<?php

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function page_url($page)
{
    return BASE_URL . '?page=' . $page;
}

function asset_url($asset)
{
    return BASE_URL . $asset;
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function db_connect(){
    $db_host=DB_HOST;
    $db_port=DB_PORT;
    $db_name=DB_NAME;
    try{
        $db= new PDO("mysql:host={$db_host};dbname={$db_name};port={$db_port}",DB_USER,DB_PASS);
    }
    catch(PDOException $e){
        dd("Error:" . $e->getMessage());
    };

    return $db;
}

function redirect($page='home'){
    header('Location: '.BASE_URL.'?page='.$page);
    die();
}

function listReservations(PDO $db){
    $select=$db->prepare("SELECT * FROM reservations");
    try{
        $select->execute();
        $results=$select->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        dd($e->getMessage());
    }
    return $results;
}

function addReservation($clientName,$clientPhone,$partySize,$reservationDate,PDO $db){
    $insert=$db->prepare("INSERT INTO reservations (clientName, clientPhone, partySize, reservationDate) 
                VALUES (:clientName, :clientPhone, :partySize, :reservationDate)");
    $insert->bindValue(':clientName',$clientName);
    $insert->bindValue(':clientPhone',$clientPhone);
    $insert->bindValue(':partySize',$partySize);
    $insert->bindValue(':reservationDate',$fullDate);
    try{
        $insert->execute();
        redirect('reservationSuccess');
    }catch(PDOException $e){
        redirect('reservationFailed');
    }
}
