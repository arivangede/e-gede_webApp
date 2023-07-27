<?php

require 'fungsi/functions.php';

session_start();
if (isset($_SESSION['kecamatan'])) {

    $id_kecamatan = $_SESSION['kecamatan'];
    $query_kecamatan = "SELECT nama_kecamatan FROM kecamatan WHERE id_kecamatan = $id_kecamatan";
    $result_kecamatan = mysqli_query($conn, $query_kecamatan);
    if ($result_kecamatan && mysqli_num_rows($result_kecamatan) > 0) {
        // Ambil nama kecamatan dari hasil query
        $row_kecamatan = mysqli_fetch_assoc($result_kecamatan);
        $nama_kecamatan = $row_kecamatan['nama_kecamatan'];
    } else {
        // Jika data kecamatan tidak ditemukan, berikan nilai default
        $nama_kecamatan = "Kecamatan Tidak Diketahui";
    }
} else {
    // Jika tidak ada ID kecamatan dalam session, berikan nilai default
    $nama_kecamatan = "Kecamatan Belum Dipilih";
}

$kecamatan = $nama_kecamatan;

$kabupaten = "Denpasar";

if (isset($_SESSION['desa'])) {
    $desa = $_SESSION['desa'];
    $imagePath = "img/$desa/desa.png";
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>e-GeDe | <?= $desa; ?></title>
</head>

<body>
    <header class="head">
        <div class="logo-nama-desa">
            <img class="logo-desa" src="<?= $imagePath; ?>" alt="logoDesa">
            <div class="nama-desa">
                <h1><?= $desa; ?></h1>
                <p>Kec. <?= $kecamatan; ?> Kota <?= $kabupaten; ?></p>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <div class="nav-btn berandaBtn active">
                <i class='bx bx-home'></i>
                <p>Beranda</p>
            </div>
            <div class="nav-btn aktivitasBtn" onclick="pindahAktivitas()">
                <i class='bx bx-collection bx-rotate-270'></i>
                <p>Aktivitas</p>
            </div>
            <div class="nav-btn menuBtn" id="menuBtn">
                <img src="img/assets/logo-tengah.png" alt="">
            </div>
            <div class="nav-btn notifikasiBtn">
                <i class='bx bx-bell'></i>
                <p>Notifikasi</p>
            </div>
            <div class="nav-btn profilBtn">
                <i class='bx bx-user-circle'></i>
                <p>Profil</p>
            </div>
        </nav>
    </div>

    <div class="menu-popup">

        <div class="menu-wrapper">
            <div class="closeBtn">
                <i class='bx bx-x'></i>
            </div>
            <div class="title">
                <h2>Menu e-GeDe</h2>
            </div>

            <div class="menu-content">
                <div class="menu 1">
                    <img src="img/assets/asset-menu-1.png" alt="icon">
                    <p>E-News</p>
                </div>
                <div class="menu 2" id="profil-desa-popup">
                    <img src="img/assets/asset-menu-2.png" alt="icon">
                    <p>Profil Desa</p>
                </div>
                <div class="menu 3">
                    <img src="img/assets/asset-menu-3.png" alt="icon">
                    <p>Regulasi</p>
                </div>
                <div class="menu 4">
                    <img src="img/assets/asset-menu-4.png" alt="icon">
                    <p>Pengaduan</p>
                </div>
                <div class="menu 5">
                    <img src="img/assets/asset-menu-5.png" alt="icon">
                    <p>Data Desa</p>
                </div>
                <div class="menu 6">
                    <img src="img/assets/asset-menu-6.png" alt="icon">
                    <p>Layanan Publik</p>
                </div>
                <div class="menu 7">
                    <img src="img/assets/asset-menu-7.png" alt="icon">
                    <p>Keuangan Desa</p>
                </div>
                <div class="menu 8">
                    <img src="img/assets/asset-menu-8.png" alt="icon">
                    <p>Wisata Budaya</p>
                </div>
            </div>
        </div>
    </div>

    <div class="body">
        <div class="carrousel-card">
            <section class="card-carrousel 1">
                <img src="img/assets/asset-2-carrousel-homepage.png" alt="iklan">
            </section>
            <section class="card-carrousel 2">
                <img src="img/assets/asset-3-carrousel-homepage.png" alt="iklan">
            </section>
        </div>


        <div class="menu-grid">
            <div class="menu e-newsBtn">
                <img src="img/assets/asset-menu-1.png" alt="icon">
                <p>E-News</p>
            </div>
            <div class="menu 2" id="profil-desa-menu">
                <img src="img/assets/asset-menu-2.png" alt="icon">
                <p>Profil Desa</p>
            </div>
            <div class="menu 3">
                <img src="img/assets/asset-menu-3.png" alt="icon">
                <p>Regulasi</p>
            </div>
            <div class="menu 4">
                <img src="img/assets/asset-menu-4.png" alt="icon">
                <p>Pengaduan</p>
            </div>
            <div class="menu 5">
                <img src="img/assets/asset-menu-5.png" alt="icon">
                <p>Data Desa</p>
            </div>
            <div class="menu 6">
                <img src="img/assets/asset-menu-6.png" alt="icon">
                <p>Layanan Publik</p>
            </div>
            <div class="menu 7">
                <img src="img/assets/asset-menu-7.png" alt="icon">
                <p>Keuangan Desa</p>
            </div>
            <div class="menu 8">
                <img src="img/assets/asset-menu-8.png" alt="icon">
                <p>Wisata Budaya</p>
            </div>
            <div class="menu lainnya">
                <img src="img/assets/asset-menu-9.png" alt="icon">
                <p>Lainnya</p>
            </div>
        </div>

        <section class="e-news">
            <div class="title-e-news">
                <h1>E-News</h1>
            </div>
            <div class="e-news-content">
                <div class="card-e-news">
                    <div class="card-pict">
                        <img src="img/assets/asset-enews-1.png" alt="e-news">
                    </div>
                    <div class="card-body">
                        <h1 class="headline">Laporan Realisasi Anggaran Pendapatan Desa Tahun 2020</h1>
                        <h5 class="tanggal-waktu">Selasa, 09 Maret 2021</h5>
                        <p class="ringkasan">Laporan Realisasi Anggaran ...</p>
                        <div class="card-btn">
                            <button class="enews-button">More</button>
                        </div>
                    </div>
                </div>
                <div class="card-e-news">
                    <div class="card-pict">
                        <img src="img/assets/asset-enews-2.png" alt="e-news">
                    </div>
                    <div class="card-body">
                        <h1 class="headline">HUT Kota Denpasar ke-234</h1>
                        <h5 class="tanggal-waktu">Rabu, 09 Maret 2022</h5>
                        <p class="ringkasan">HUT Kota Denpasar ke-234 ...</p>
                        <div class="card-btn">
                            <button class="enews-button">More</button>
                        </div>
                    </div>
                </div>
                <div class="card-e-news">
                    <div class="card-pict">
                        <img src="img/assets/asset-enews-3.png" alt="e-news">
                    </div>
                    <div class="card-body">
                        <h1 class="headline">Rapat Koordinasi Kepsek SD SMP</h1>
                        <h5 class="tanggal-waktu">Kamis, 15 Juni 2017</h5>
                        <p class="ringkasan">Rapat pembahasan penerimaan ...</p>
                        <div class="card-btn">
                            <button class="enews-button">More</button>
                        </div>
                    </div>
                </div>
                <div class="card-e-news">
                    <div class="card-pict">
                        <img src="img/assets/asset-enews-4.png" alt="e-news">
                    </div>
                    <div class="card-body">
                        <h1 class="headline">Penyerahan Sertifikat PTSL</h1>
                        <h5 class="tanggal-waktu">Senin, 09 maret 2021</h5>
                        <p class="ringkasan">Penyerahan Sertifikat hasil ...</p>
                        <div class="card-btn">
                            <button class="enews-button">More</button>
                        </div>
                    </div>
                </div>
                <div class="card-e-news">
                    <div class="card-pict">
                        <img src="img/assets/asset-enews-5.png" alt="e-news">
                    </div>
                    <div class="card-body">
                        <h1 class="headline">Kegiatan PROKASIH</h1>
                        <h5 class="tanggal-waktu">Selasa, 24 Oktober 2017</h5>
                        <p class="ringkasan">Kegiatan PROKASIH (Program ...</p>
                        <div class="card-btn">
                            <button class="enews-button">More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="fungsi/app.js"></script>
</body>

</html>