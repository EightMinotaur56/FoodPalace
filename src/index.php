<?php
require_once './config.php';
require_once './functions.php';

$page = array_key_exists('page', $_GET) ? $_GET['page'] : 'home';

require_once './views/_header.php';
if (file_exists("./pages/$page.php")) {
    require_once "./pages/$page.php";
} else {
    require_once "./pages/404.php";
}
require_once './views/_footer.php';
