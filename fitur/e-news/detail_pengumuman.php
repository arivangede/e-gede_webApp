<?php
require '../../fungsi/functions.php';

session_start();
if (isset($_SESSION['kecamatan'])) {
    $kecamatan = $_SESSION['kecamatan'];
    // var_dump($kecamatan);
}

if (isset($_SESSION['desa'])) {
    $desa = $_SESSION['desa'];
    // var_dump($desa);
    $imagePath = "../../img/$desa/desa.png";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengumuman</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/e_news.css">
</head>

<body>

    <div class="pengumuman-head">
        <div class="header-halaman">
            <a href="index.php"> <i class='bx bx-chevron-left'></i> Kembali</a>
        </div>
        <div class="text-pengumuman">
            <h1>Jadwal Perekaman E-KTP di Kantor Desa <?= $desa ?> </h1>
            <p>Rabu, 25 april 2023</p>
        </div>
    </div>

    <div class="sosial-media">
        <div class="facebook share">
            <i class='bx bxl-facebook-circle'></i>
        </div>
        <div class="twitter share">
            <i class='bx bxl-twitter'></i>
        </div>
        <div class="gmail share">
            <i class='bx bxs-envelope'></i>
        </div>
        <div class="link share">
            <i class='bx bx-link-alt'></i>
        </div>
    </div>

    <div class="pengumuman-body">
        <div class="gambar-isi">
            <img src="../../img/fitur-enews/asset-gambar-pengumuman.png" alt="">
        </div>
        <div class="isi-pengumuman">
            <p>
                Diberitahukan kepada warga Desa Dauh Puri Kaja, bahwasannya hari Ini Rabu, 25 April 2018 pukul 18.00 s/d
                22.00 WITA akan diadakan Perekaman E-KTP di Kantor Desa, dengan persyaratan membawa photocopy Kartu Keluarga..... terima kasih.
            </p>
        </div>
    </div>




</body>

</html>