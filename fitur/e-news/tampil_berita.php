<?php

use LDAP\Result;

require '../../fungsi/functions.php';

session_start();
if (isset($_SESSION['kecamatan'])) {
    $kecamatan = $_SESSION['kecamatan'];
}


if (isset($_SESSION['desa'])) {
    $desa = $_SESSION['desa'];
    $imagePath = "../../img/$desa/desa.png";
}

// Memastikan koneksi sudah dibuat pada functions.php
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "SELECT judul, ringkasan, isi FROM e_news";
$result = mysqli_query($conn, $query);

// Periksa apakah query gagal
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-news</title>
    <link rel="stylesheet" href="../../css/e_news.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-logo">
      <img src="../../img_e_news/Asset 7.png" alt="">
      <h1>E-NEWS</h1>
      <h2><?=$desa?>,</h2> <h3>kec.<?=$kecamatan?></h3>
    </div>
    <div class="head-pengumuman">
    <div class="select-pengumuman">
      <p>Pengumuman</p>
      <a href=""> Lihat Semua <i class='bx bx-chevron-right'></i></a>
      <img src="../../img_e_news/Asset 1.png" alt="">
    </div>
    </div>
    <div class="neck-pengumuman">
      <p>Berita</p>
      <a href=""><i class='bx bx-filter-alt'></i>Filter</a>
    </div>
    <div class="body-berita">
      <div class="body-berita1">
      <img src="../../img_e_news/Asset 3.png" alt="">
      </div>
      <div class="body-berita2">
      <img src="../../img_e_news/Asset 4.png" alt="">
      </div>
    </div>
   

    <script src="e-news.js"></script>
</body>
</html>
