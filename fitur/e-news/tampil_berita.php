<?php

use LDAP\Result;
$desa = 'Tegal Kertha';
$kecamatan = 'Denpasar Barat';

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
  <div class="container-tampil-berita">
    <div class="container-logo-pengumuman-berita">
      <img src="../../img_e_news/Asset 7.png" alt="">
      <div class="title-fitur">
         <h1>E-NEWS</h1>
         <h2><?=$desa?> kec.<?=$kecamatan?></h2>
      </div>
    </div>
    <div class="head-pengumuman-berita">
    <div class="select-pengumuman-berita">
      <p>Pengumuman</p>
      <a href="detile_pengumuman.php"> Lihat Semua <i class='bx bx-chevron-right'></i></a>
      <div class="pengumumanBtn">
      <img  src="../../img_e_news/Asset 1.png" alt="">
      </div>
    </div>
    </div>
    <div class="neck-pengumuman-berita">
      <p>Berita</p>
      <a href=""><i class='bx bx-filter-alt'></i>Filter</a>
    </div>
    </div>
    <div class="body-berita-pengumuman">
    <div class ="Btnberita">  
    <div class="body-berita1">
      <img src="../../img_e_news/Asset 3.png" alt="">
      </div>
      </div>
      <div class="body-berita2">
      <img src="../../img_e_news/Asset 4.png" alt="">
      </div>
      <div class="body-berita2">
      <img src="../../img_e_news/Asset 3.png" alt="">
      </div>
      <div class="body-berita2">
      <img src="../../img_e_news/Asset 4.png" alt="">
      </div>
    </div>
  
   

    <script src="e-news.js"></script>
</body>
</html>
