<?php
require "../../fungsi/functions.php";
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
    <link rel="stylesheet" href="../../css/wisata-budaya.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Wisata Budaya</title>
</head>

<body>
    <header>
        <a href="../../home.php"><i class='bx bx-arrow-back'></i></a>
        <img src="../../img/assets/asset-menu-8.png" alt="">
        <div class="title-fitur">
            <h1>Wisata Budaya</h1>
            <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
        </div>
    </header>

    <div class="content-wrapper">
        <div class="kategori">
            <h3>Kategori</h3>
        </div>

        <div class="cards-container">
            <div class="card">
                <div class="card-hero">
                    <h2>Wisata</h2>
                    <img src="../../img/wisata-budaya/asset-wisata.png" alt="">
                </div>
                <div class="card-footer">
                    <p>Mari kita simak tempat-tempat wisata yang ada di desa <?= $desa; ?></p>
                    <button class="card-btn">
                        <span>Lebih Banyak</span>
                        <i class='bx bxs-right-arrow'></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-hero">
                    <h2>Budaya</h2>
                    <img src="../../img/wisata-budaya/asset-budaya.png" alt="">
                </div>
                <div class="card-footer">
                    <p>Mari kita simak tempat-tempat budaya yang ada di desa <?= $desa; ?></p>
                    <button class="card-btn">
                        <span>Lebih Banyak</span>
                        <i class='bx bxs-right-arrow'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>