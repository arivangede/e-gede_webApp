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
}

if (mysqli_num_rows($result_desa) > 0) {
    $row_desa = mysqli_fetch_assoc($result_desa);
    $nama_desa = $row_desa['nama_desa'];
    $desa = $nama_desa;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Publik</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/layanan-publik.css">
</head>

<body>
    <div class="container-layanan">
        <div class="pembungkus-head">
            <div class="btnkembali">
                <i class='bx bx-arrow-back'></i>
            </div>
            <div class="head-layanan-publik">
                <img src="../../img/layanan-publik/Asset1.png" alt="">
            </div>
            <div class="pembungkus-judul">
                <div class="judul-layanan-publik">
                    <p>LAYANAN PUBLIK</p>
                </div>
                <div class="sub-judul-layanan-publik">
                    <p><span> Desa<?= $desa ?></span>, Kec <?= $kecamatan ?></p>
                </div>
            </div>
        </div>

        <div class="kategori">
            <div class="kategori-layanan">
                <p>Kategori</p>
            </div>
        </div>
        <div class="content-layanan-publik">
            <div class="e-bansos">
                <div class="content1">
                    <div class="text-content1">
                        <p>E - Bansos</p>
                    </div>
                    <div class="img-content1">
                        <img src="../../img/layanan-publik/Asset4.png" alt="">
                    </div>
                </div>
                <div class="content2">
                    <div class="text-content2">
                        <p>Ayo klik menu berikut ini untuk melihat lebih lengkap mengenai bantuan sosial individu ataupun keluarga</p>
                    </div>
                    <div class="btnmore" onclick="pindahkeEbansos()">
                        <p>Lebih Banyak<i class='bx bxs-right-arrow'></i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-layanan-publik">
            <div class="e-bansos">
                <div class="content1">
                    <div class="text-content1">
                        <p>E - Surat</p>
                    </div>
                    <div class="img-content2">
                        <img src="../../img/layanan-publik/Asset5.png" alt="">
                    </div>
                </div>
                <div class="content3">
                    <div class="text-content3">
                        <p>Ayo klik menu berikut ini untuk melihat lebih lengkap mengenai administrasi desa</p>
                    </div>
                    <div class="btnmore1" onclick="pindahkeEsurat()">
                        <p>Lebih Banyak<i class='bx bxs-right-arrow'></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="layanan-publik.js"></script>
</body>

</html>