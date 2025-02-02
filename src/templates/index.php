<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/static/css/main.css">
    <link rel="stylesheet" href="./src/static/css/header.css">
</head>
<body>
    <?php require './src/includes/header.php' ?>

    <main>

    </main>
    
    <?php require './src/includes/footer.php' ?>


   
</body>
</html>
<?php

    if ($_SERVER)

    $mysqli = new mysqli("127.0.0.1", "root", "", "mynestapi", 3306);
    echo $mysqli->host_info . "\n";
?>