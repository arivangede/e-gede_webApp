<?php

require 'fungsi/functions.php';

session_start();

$kecamatan = "Denpasar Utara";
$kota = "Denpasar";

if (isset($_SESSION['region'])) {
    $region = $_SESSION['region'];
    $imagePath = "img/$region/desa.png";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>e-GeDe | <?= $region; ?></title>
</head>

<body>
    <header class="head">
        <div class="logo-nama-desa">
            <img class="logo-desa" src="<?= $imagePath; ?>" alt="logoDesa">
            <div class="nama-desa">
                <h1><?= $region; ?></h1>
                <p>Kec. <?= $kecamatan; ?> Kota <?= $kota; ?></p>
            </div>
        </div>
    </header>

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
            <div class="menu 1">
                <img src="img/assets/asset-menu-1.png" alt="icon">
                <p>E-News</p>
            </div>
            <div class="menu 2">
                <img src="img/assets/asset-menu-2.png" alt="icon">
                <p>Peta Desa</p>
            </div>
            <div class="menu 3">
                <img src="img/assets/asset-menu-3.png" alt="icon">
                <p>Produk Hukum</p>
            </div>
            <div class="menu 4">
                <img src="img/assets/asset-menu-4.png" alt="icon">
                <p>Pengaduan</p>
            </div>
            <div class="menu 5">
                <img src="img/assets/asset-menu-5.png" alt="icon">
                <p>Informasi Publik</p>
            </div>
            <div class="menu 6">
                <img src="img/assets/asset-menu-6.png" alt="icon">
                <p>Satu Data</p>
            </div>
            <div class="menu 7">
                <img src="img/assets/asset-menu-7.png" alt="icon">
                <p>Layanan Kependudukan</p>
            </div>
            <div class="menu 8">
                <img src="img/assets/asset-menu-8.png" alt="icon">
                <p>Keuangan Desa</p>
            </div>
            <div class="menu 9">
                <img src="img/assets/asset-menu-9.png" alt="icon">
                <p>Inovasi Desa</p>
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

</body>

</html>