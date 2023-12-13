<?php

function dd($var)
{
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function page_url($page)
{
    return BASE_URL.':8080/' . '?page=' . $page;
}

function asset_url($asset)
{
    return BASE_URL .':8080/' . $asset;
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
        return $db;
    }
    catch(PDOException $e){
        return null;
    };
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

function addReservation($clientName,$clientPhone,$partySize,$reservationDate,$db){
    try{
        $insert=$db->prepare("INSERT INTO reservations (clientName, clientPhone, partySize, reservationDate) 
                VALUES (:clientName, :clientPhone, :partySize, :reservationDate)");
        $insert->bindValue(':clientName',$clientName);
        $insert->bindValue(':clientPhone',$clientPhone);
        $insert->bindValue(':partySize',$partySize);
        $insert->bindValue(':reservationDate',$reservationDate);
    }catch(Throwable $e){
        redirect('reservationFailed');
    }
    try{
        $insert->execute();
        redirect('reservationSuccess');
    }catch(PDOException $e){
        redirect('reservationFailed');
    } 
}

function getVegan($db){
    $vegan = $db->prepare("SELECT * FROM vegan");
    try{
        $vegan->execute();
        $result= $vegan->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        dd($e->getMessage());
    }

    return $result;
}
function getMain($db){
    $vegan = $db->prepare("SELECT * FROM main");
    try{
        $vegan->execute();
        $result= $vegan->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        dd($e->getMessage());
    }

    return $result;
}
function getDesserts($db){
    $vegan = $db->prepare("SELECT * FROM desserts");
    try{
        $vegan->execute();
        $result= $vegan->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        dd($e->getMessage());
    }

    return $result;
}


function getMenu($db){
    $menu = $db->prepare("SELECT * FROM menu");
    try{
        $menu->execute();
        $result= $menu->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        dd($e->getMessage());
    }

    return $result;
}