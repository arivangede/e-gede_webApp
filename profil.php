<?php
require "fungsi/functions.php";
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

if (isset($_SESSION['desa'])) {
    $id_desa = $_SESSION['desa'];
    $querydesa = "SELECT nama_desa FROM desa WHERE id_desa = $id_desa";
    $result = mysqli_query($conn, $querydesa);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $desa = $row['nama_desa'];
    }
}
if (isset($_SESSION['kecamatan'])) {
    $id_kecamatan = $_SESSION['kecamatan'];
    $querykecamatan = "SELECT nama_kecamatan FROM kecamatan WHERE id_kecamatan = $id_kecamatan";
    $result = mysqli_query($conn, $querykecamatan);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $kecamatan = $row['nama_kecamatan'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/profil.css">
    <title>e-GeDe | Profil</title>
</head>

<body>
    <div class="navbar">
        <nav>
            <div class="nav-btn berandaBtn" onclick="pindahHome()">
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
            <div class="nav-btn notifikasiBtn" onclick="pindahNotifikasi()">
                <i class='bx bx-bell'></i>
                <p>Notifikasi</p>
            </div>
            <div class="nav-btn profilBtn active">
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
                <div class="menu 2" onclick="pindahFiturProfilDesa()">
                    <img src="img/assets/asset-menu-2.png" alt="icon">
                    <p>Profil Desa</p>
                </div>
                <div class="menu 3" onclick="underConstruction()">
                    <img src="img/assets/asset-menu-3.png" alt="icon">
                    <p>Regulasi</p>
                </div>
                <div class="menu 4" onclick="pengaduan()">
                    <img src="img/assets/asset-menu-4.png" alt="icon">
                    <p>Pengaduan</p>
                </div>
                <div class="menu 5" onclick="dataDesa()">
                    <img src="img/assets/asset-menu-5.png" alt="icon">
                    <p>Data Desa</p>
                </div>
                <div class="menu 6" onclick="underConstruction()">
                    <img src="img/assets/asset-menu-6.png" alt="icon">
                    <p>Layanan Publik</p>
                </div>
                <div class="menu 7" onclick="keuanganDesa()">
                    <img src="img/assets/asset-menu-7.png" alt="icon">
                    <p>Keuangan Desa</p>
                </div>
                <div class="menu 8" onclick="underConstruction()">
                    <img src="img/assets/asset-menu-8.png" alt="icon">
                    <p>Wisata Budaya</p>
                </div>
                <div class="menu 9" onclick="ePasar()">
                    <img src="img/assets/asset-menu-10.png" alt="icon">
                    <p>E-Pasar</p>
                </div>
            </div>
        </div>
    </div>


    <div class="fitur-wrapper">
        <header class="profile-header">
            <div class="logout-btn btn">
                <i class='bx bx-log-out'></i>
                <a href="fungsi/logout.php">Keluar</a>
            </div>
            <div class="edit-btn btn">
                <i class='bx bx-slider'></i>
                <a href="under-construction.php">Edit Profile</a>
            </div>
        </header>

        <div class="first-card">
            <div class="card-display">
                <img class="idcard-bg" src="img/assets/asset-profil-cardid.png" alt="">
                <div class="card-content">
                    <div class="upper-card">
                        <div class="user">
                            <h1>Penduduk 1</h1>
                            <span>Masyarakat</span>
                        </div>
                        <div class="user-info">
                            <div class="desa info-card">
                                <span><?= $desa; ?></span>
                                <div class="icon">
                                    <i class='bx bxs-map'></i>
                                </div>
                            </div>
                            <div class="telepon info-card">
                                <span>+62 8123 4567 891</span>
                                <div class="icon">
                                    <i class='bx bxs-phone'></i>
                                </div>
                            </div>
                            <div class="mail info-card">
                                <span>Penduduk1@gmail.com</span>
                                <div class="icon">
                                    <i class='bx bxs-envelope'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-card">
                        <div class="idcard-logo">
                            <img src="img/assets/logo-egede.png" alt="">
                        </div>
                        <div class="idcard-number">
                            <span>51710420111603700001</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile">
                <div class="image-place">
                    <div class="img-wrapper">
                        <img src="img/assets/asset-profil-fotoprofil.png" alt="">
                    </div>
                </div>
                <div class="username">
                    <h2>Penduduk 1</h2>
                </div>
                <div class="place">
                    <span id="desa"><?= $desa ?></span>
                    <span id="kecamatan"><?= $kecamatan ?></span>
                    <span id="kota">Denpasar</span>
                    <span id="provinsi">Bali</span>
                </div>
                <div class="selection">
                    <div class="select informasi active">
                        <i class='bx bx-user'></i>
                        <h3>Informasi Diri</h3>
                    </div>
                    <div class="select e-pasar">
                        <i class='bx bxs-store'></i>
                        <h3>E-Pasar</h3>
                    </div>
                </div>
            </div>

            <div class="section-wrapper">
                <div class="section-screen">
                    <section id="informasi">
                        <div class="info tentang-anda">
                            <div class="title">
                                <i class='bx bx-book'></i>
                                <p>Tentang Anda</p>
                            </div>
                            <div class="content">
                                <p>Bisnis pupuk organik import</p>
                            </div>
                        </div>
                        <div class="info nomor-telepon">
                            <div class="title">
                                <i class='bx bxl-whatsapp'></i>
                                <p>Nomor Telepon</p>
                            </div>
                            <div class="content">
                                <p>+62 8123 4567 891</p>
                            </div>
                        </div>
                        <div class="info email">
                            <div class="title">
                                <i class='bx bx-envelope'></i>
                                <p>E-mail</p>
                            </div>
                            <div class="content">
                                <p>Penduduk1@gmail.com</p>
                            </div>
                        </div>
                        <div class="info alamat">
                            <div class="title">
                                <i class='bx bxs-map'></i>
                                <p>Alamat</p>
                            </div>
                            <div class="content">
                                <p>Jl.jalan, <?= $desa ?>, <?= $kecamatan ?></p>
                            </div>
                        </div>
                        <div class="lihat-btn">
                            <button onclick="underConstruction()">Lihat Semua</button>
                        </div>
                    </section>
                    <section id="e-pasar">
                        <img src="img/assets/asset-profil-epasar.png" alt="" onclick="underConstruction()">
                    </section>
                </div>
            </div>
        </div>

    </div>

    <script src="fungsi/app.js"></script>
</body>

</html>