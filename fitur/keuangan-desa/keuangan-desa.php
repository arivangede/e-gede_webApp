<?php
require '../../fungsi/functions.php';
session_start();

if (isset($_SESSION['kecamatan'])) {
    $id_kecamatan = $_SESSION['kecamatan'];

    $query_kecamatan = "SELECT nama_kecamatan FROM kecamatan WHERE id_kecamatan = $id_kecamatan";
    $result_kecamatan = mysqli_query($conn, $query_kecamatan);

    if (mysqli_num_rows($result_kecamatan) > 0) {
        $row_kecamatan = mysqli_fetch_assoc($result_kecamatan);
        $nama_kecamatan = $row_kecamatan['nama_kecamatan'];
        $kecamatan = $nama_kecamatan;
    }
}

if (isset($_SESSION['desa'])) {
    $id_desa = $_SESSION['desa'];

    $query_desa = "SELECT nama_desa FROM desa WHERE id_desa = $id_desa";
    $result_desa = mysqli_query($conn, $query_desa);

    if (isset($_SESSION['desa'])) {
        $row_desa = mysqli_fetch_assoc($result_desa);
        $nama_desa = $row_desa['nama_desa'];
        $desa = $nama_desa;
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan Desa</title>
    <link rel="stylesheet" href="../../css/keuangan-desa.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="continer-keuangan-desa">
        <div class="v">
            <div class="head-keuangan-desa">
                <div class="Btnbackhome">
                    <a href="../../home.php"><i class='bx bx-arrow-back'></i></a>
                </div>
                <div class="icon-keuangan">
                    <img src="../../img/img-keuangan-desa/Assets 1.png" alt="">
                </div>
                <div class="judul-keuangan-desa">
                    <div class="text-judul-keuangan-desa">
                        <p>Keuangan Desa</p>
                    </div>
                    <div class="text2-judul-keuangan-desa">
                        <p><span><?= $desa ?></span>, Kec <?= $kecamatan ?></p>
                    </div>
                </div>
            </div>
            <div class="text-keuangan-desa">
                <p>Kategori</p>
            </div>
        </div>

        <div class="isi-keuangan-desa" onclick="masukkeuangan()">
            <div class="Btnmasuk">
                <div class="isi1-keuangan-desa">
                    <img src="../../img/img-keuangan-desa/Assets 3.png" alt="">
                </div>
            </div>
            <div class="isi2-keuangan-desa">
                <img src="../../img/img-keuangan-desa/Assets 4.png" alt="">
            </div>
            <div class="isi3-keuangan-desa">
                <img src="../../img/img-keuangan-desa/Assets 5.png" alt="">
            </div>
            <div class="isi4-keuangan-desa">
                <img src="../../img/img-keuangan-desa/Assets 6.png" alt="">
            </div>
            <div class="isi5-keuangan-desa">
                <img src="../../img/img-keuangan-desa/Assets 7.png" alt="">
            </div>
        </div>
    </div>

    <script src="keuangan-desa.js"></script>
</body>

</html>