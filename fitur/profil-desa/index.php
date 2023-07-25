<?php
require '../../fungsi/functions.php';
session_start();

if (isset($_SESSION['kecamatan'])) {
    $id_kecamatan = $_SESSION['kecamatan'];
    $query = "SELECT nama_kecamatan FROM kecamatan WHERE id_kecamatan = $id_kecamatan";
    $result_kecamatan = mysqli_query($conn, $query);

    if ($result_kecamatan && mysqli_num_rows($result_kecamatan) > 0) {
        // Ambil nama kecamatan dari hasil query
        $row_kecamatan = mysqli_fetch_assoc($result_kecamatan);
        $nama_kecamatan = $row_kecamatan['nama_kecamatan'];
    }
}
$kabupaten = "denpasar";
$kecamatan = $nama_kecamatan;

if (isset($_SESSION['desa'])) {
    $desa = $_SESSION['desa'];
    $imagePath = "../../img/$desa/desa.png";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/profil-desa.css">
    <title>e-GeDe | Profil Desa</title>
</head>

<body>
    <header>
        <img src="<?= $imagePath; ?>" alt="">
        <div class="title">
            <h1><?= $desa; ?></h1>
            <h4>Kec. <?= $kecamatan; ?> Kab. <?= $kabupaten; ?></h4>
        </div>
    </header>

    <div class="card-menu wilayah-desa">
        <img src="" alt="">
        <p>Wilayah Desa</p>
    </div>
    <div class="card-menu sejarah-desa">
        <img src="" alt="">
        <p>Sejarah Desa</p>
    </div>
    <div class="card-menu struktur-pemerintahan">
        <img src="" alt="">
        <p>Struktur Pemerintahan</p>
    </div>
    <div class="card-menu bpd">
        <img src="" alt="">
        <p>BPD</p>
    </div>
</body>

</html>