<?php

require 'fungsi/functions.php';

session_start();

$kecamatan = "Denpasar Utara";
$kota = "Denpasar";

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
    <header class="head">
        <div class="logo-nama-desa">
            <img class="logo-desa" src="<?= $imagePath; ?>" alt="logoDesa">
            <div class="nama-desa">
                <h1><?= $region; ?></h1>
                <p>Kec. <?= $kecamatan; ?> Kota <?= $kota; ?></p>
            </div>
        </div>
    </header>

    <div class="body">
        <div class="carrousel-card">
            <section class="card-carrousel 1">
                <img src="img/assets/asset-2-carrousel-homepage.png" alt="iklan">
            </section>
            <section class="card-carrousel 2">
                <img src="img/assets/asset-3-carrousel-homepage.png" alt="iklan">
            </section>
        </div>
    </div>

</body>

</html>