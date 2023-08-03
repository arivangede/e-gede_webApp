<?php
require '../../fungsi/functions.php';
session_start();

if (isset($_SESSION['desa'])) {
    $id = $_SESSION['desa'];
    $query = "SELECT nama_desa FROM desa WHERE id_desa = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama_desa = $row['nama_desa'];
    }
}
if (isset($_SESSION['kecamatan'])) {
    $id = $_SESSION['kecamatan'];
    $query = "SELECT nama_kecamatan FROM kecamatan WHERE id_kecamatan = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama_kecamatan = $row['nama_kecamatan'];
    }
}

$desa = $nama_desa;
$kecamatan = $nama_kecamatan;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="profil-desa.css">
    <title>e-GeDe | Profil Desa</title>
</head>

<body>
    <header>
        <a href="../../home.php"><i class='bx bx-arrow-back'></i></a>
        <img src="../../img/assets/asset-menu-2.png" alt="">
        <div class="title-fitur">
            <h1>PROFIL DESA</h1>
            <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
        </div>
    </header>

    <div class="kategori-wrapper">
        <div class="title">
            <h4>Kategori</h4>
        </div>
        <div class="card-container">
            <div class="card-menu">
                <img class="logo" src="../../img/assets/logo-egede.png" alt="">
                <div class="upper">
                    <h3>Wilayah Desa</h3>
                    <img src="../../img/fitur-profildesa/asset-icon-wilayahdesa.png" alt="">
                </div>
            </div>
            <div class="card-menu">
                <img class="logo" src="../../img/assets/logo-egede.png" alt="">
                <div class="upper">
                    <h3>Sejarah Desa</h3>
                    <img src="../../img/fitur-profildesa/asset-icon-sejarahdesa.png" alt="">
                </div>
            </div>
            <div class="card-menu">
                <img class="logo" src="../../img/assets/logo-egede.png" alt="">
                <div class="upper">
                    <h3>Visi & Misi</h3>
                    <img src="../../img/fitur-profildesa/asset-icon-visimisi.png" alt="">
                </div>
            </div>
            <div class="card-menu">
                <img class="logo" src="../../img/assets/logo-egede.png" alt="">
                <div class="upper">
                    <h3>Struktur Pemerintahan Desa</h3>
                    <img src="../../img/fitur-profildesa/asset-icon-strukturpemerintahan.png" alt="">
                </div>
            </div>
            <div class="card-menu">
                <img class="logo" src="../../img/assets/logo-egede.png" alt="">
                <div class="upper">
                    <h3>Lembaga Kemasyarakatan</h3>
                    <img src="../../img/fitur-profildesa/asset-icon-lembagamasyarakat.png" alt="">
                </div>
            </div>
        </div>
    </div>


</body>

</html>