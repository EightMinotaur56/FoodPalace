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
   $ipAddress="130.211.57.2";
   $user="restaurant";
   $password="restaurantroor";
   $db="restaurant";

   $connect=mysqli_connect("cloudipad:",$ipAddress,$user,$password,$db);
}

function redirect($page='home'){
    header('Location: '.BASE_URL.'?page='.$page);
    die();
}
