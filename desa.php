<?php

require 'fungsi/functions.php';

session_start();

if (isset($_SESSION['region'])) {
    $region = $_SESSION['region'];
    $imagePath = "img/$region/desa.png";

    echo "Selamat datang di desa $region!";
    echo "<img src='$imagePath' alt='$region'>";
} else {
    echo "region tidak ditemukan";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini desa</title>
</head>

<body>
    <h1>ini desa ...</h1>
</body>

</html>