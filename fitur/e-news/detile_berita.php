<?php
session_start();
if(isset($_SESSION['desa'])){
    $desa = $_SESSION['desa'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detile Berita</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/e_news.css">
</head>
<body>
    <div class="berita-wraper">
        <div class="head-berita">
                <a href="tampil_berita"> <i class='bx bx-chevron-left'> </i> Kembali</a>
                <div class="judul-berita">
                        <h2>Perayaan Hari Ulang Tahun Kota Denpasar Ke 234 Tahun</h2>
                        <p>Rabu, 09 Maret 2023</p>
                </div>
                <div class="sosial-media">
                    <a href=""><i class='bx bxl-facebook-circle' ></i></a>
                    <a href=""><i class='bx bxl-twitter' ></i></a>
                    <a href=""><i class='bx bxs-envelope' ></i></a>
                    <a href=""><i class='bx bx-link-alt' ></i></a>
                </div>
            </div>
    </div>
</body>
</html>