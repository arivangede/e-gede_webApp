<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/notifikasi.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>e-GeDe | Notifikasi</title>
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
            <div class="nav-btn notifikasiBtn active">
                <i class='bx bx-bell'></i>
                <p>Notifikasi</p>
            </div>
            <div class="nav-btn profilBtn" onclick="pindahProfil()">
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

    <section class="notifikasi">
        <header>
            <div class="title">
                <h2>Notifikasi</h2>
            </div>
        </header>
        <div class="content">

            <div class="notifikasi-card" onclick="masukNotifikasi()">
                <div class="profile">
                    <img src="img/assets/asset-notifikasi-profil-1.png" alt="">
                </div>
                <div class="isi-pengumuman">

                    <h3>e-GeDe</h3>

                    <span>1 menit yang lalu</span>

                    <p>
                        Hallo...Selamat Datang di aplikasi e-GeDe, mari telusuri lebih rinci aplikasi ini agar bisa menemukan manfaat beragam serta berbagai macam keunggulan fitur yang ada didalamnya seperti :

                        1. Fitur E - News
                        2. Fitur Profil Desa
                        3. Fitur Regulasi
                        4. Fitur Pengaduan
                        5. Fitur Data Desa
                        6. Fitur Layanan Publik
                        7. Fitur Wisata & Budaya
                        8. Fitur E - Pasar

                        Selain dari fitur-fitur tersebut masih banyak lagi inovasi yang terdapat di dalamnya.
                        Mari ikuti terus program aplikasi e GeDe dan berikan saran maupun masukan Anda untuk memajukan serta mensukseskan Kota Denpasar ini melalui aplikasi e GeDe
                    </p>

                </div>
            </div>

        </div>
    </section>

    <script src="fungsi/app.js"></script>
</body>

</html>