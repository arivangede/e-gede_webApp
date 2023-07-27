<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aktivitas.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>E-GeDe | Aktivitas</title>
</head>

<body>
    <header>
        <div class="title">
            <h2>Aktivitas</h2>
        </div>
        <div class="pilihan">
            <div class="laporan-saya active">
                <h3>Laporan Saya</h3>
            </div>
            <div class="disimpan">
                <h3>Disimpan</h3>
            </div>
        </div>
    </header>

    <div class="navbar">
        <nav>
            <div class="nav-btn berandaBtn" onclick="pindahHome()">
                <i class='bx bx-home'></i>
                <p>Beranda</p>
            </div>
            <div class="nav-btn aktivitasBtn active">
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
                <div class="menu 2" onclick="pindahFiturProfilDesa()">
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

    <div class="outer-container">
        <div class="body laporan-saya">
            <section id="laporan-saya">

            </section>
            <section id="disimpan">

            </section>
        </div>
    </div>




    <script src="fungsi/app.js"></script>
</body>

</html>