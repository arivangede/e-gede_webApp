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
    <link rel="stylesheet" href="../../css/data-desa.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Data Desa</title>
</head>

<body>
    <header>
        <a href="../../home.php"><i class='bx bx-arrow-back'></i></a>
        <img src="../../img/assets/asset-menu-5.png" alt="">
        <div class="title-fitur">
            <h1>DATA DESA</h1>
            <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
        </div>
    </header>

    <div class="kategori-wrapper">
        <div class="kategori-card">
            <h3>Filter Kategori</h3>
            <div class="filter">
                <div class="pilih-topik pilih">
                    <h4>Pilih Topik</h4>
                    <select name="topik" id="pilih-topik">
                        <option value="">Tampilkan Semua</option>
                        <option value="1">Statistik Penduduk</option>
                        <option value="2">Statistik Keluarga</option>
                        <option value="3">Statistik Bantuan</option>
                        <option value="4">Statistik Lainnya</option>
                    </select>

                </div>
                <div class="pilih-subtopik pilih">
                    <h4>Pilih Sub-Topik</h4>
                    <select name="sub-topik" id="pilih-subtopik" disabled>
                        <option value="">Tampilkan Semua</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="grafik">
            <div class="grafik-title">
                <h4>Demografi Statistik</h4>
            </div>
            <div class="grafik-select">
                <div class="pilihan">
                    <div class="pilihan-card bar active">
                        <h4>Diagram Batang</h4>
                    </div>
                    <div class="pilihan-card pie">
                        <h4>Diagram Pie</h4>
                    </div>
                </div>
            </div>
            <div class="grafik-display">
                <div class="grafik-screen ">
                    <img src="../../img/fitur-datadesa/asset-grafik-bar.png" alt="">
                    <img src="../../img/fitur-datadesa/asset-grafik-pie.png" alt="">
                </div>
            </div>
        </div>

        <div class="tabel">
            <div class="tabel-title">
                <h4>Tabel Demografi Statistik</h4>
            </div>
            <div class="tabel-display">
                <img src="../../img/fitur-datadesa/asset-tabel-datadesa.png" alt="">
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#pilih-topik").on("change", function() {
                var idTopik = $(this).val();

                $.ajax({
                    url: "get_subtopik.php",
                    type: "POST",
                    data: {
                        topik: idTopik,
                    },
                    success: function(response) {
                        $('#pilih-subtopik').prop("disabled", false);
                        $('#pilih-subtopik').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Error:");
                        console.log("Status: " + status);
                        console.log("Error: " + error);
                    }
                })
            })
        })
    </script>

    <script src="data-desa.js"></script>
</body>

</html>