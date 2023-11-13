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
