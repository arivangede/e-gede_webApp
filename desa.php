<?php

require 'fungsi/functions.php';

session_start();

if (isset($_SESSION['region'])) {
    $region = $_SESSION['region'];
    $imagePath = "img/$region/desa.png";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ini desa</title>
</head>

<body>
    <h1>Selamat Datang di <?= $region; ?></h1>
    <img src="<?= $imagePath; ?>" alt="logoDesa">
</body>

</html>