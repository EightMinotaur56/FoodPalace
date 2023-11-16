<?php
    //$db=db_connect();//If we have this here we don't need to call db_connect() in the pages php files
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/5f4f01cc86.js" crossorigin="anonymous"></script>
</head>
<Title>Food Palace</Title>



<body>
    <div class="header">
        <div class="content">
            <div class="logo">
                <ul>
                    <li><image src="<?= asset_url('images/logo.png')?>" alt=""></li>
                    <li><h1>Palace</h1></li>
                </ul>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="<?php echo page_url('home'); ?>">Home</a></li>
                    <li><a href="<?= page_url('contact'); ?>">Contact</a></li>
                </ul>
                <button type="button" class="reservation"><a href="<?= page_url('reservation'); ?>" role="button">Reservation</a></button>
            </div>
        </div>
    </div>
