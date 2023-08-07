<?php
require '../../fungsi/functions.php';
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
    <link rel="stylesheet" href="../../css/pengaduan.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Pengaduan</title>
</head>

<body>
    <header>
        <a href="../../home.php"><i class='bx bx-arrow-back'></i></a>
        <img src="../../img/assets/asset-menu-4.png" alt="">
        <div class="title-fitur">
            <h1>PENGADUAN</h1>
            <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
        </div>
    </header>

    <div class="kategori-wrapper">
        <div class="pilihan">
            <i class='bx bxs-help-circle'></i>
            <span>help</span>
        </div>
        <div class="pilihan">
            <i class='bx bxs-help-circle'></i>
            <span>help</span>
        </div>
        <div class="pilihan">
            <i class='bx bxs-help-circle'></i>
            <span>help</span>
        </div>
        <div class="pilihan">
            <i class='bx bxs-help-circle'></i>
            <span>help</span>
        </div>
        <div class="pilihan">
            <i class='bx bxs-help-circle'></i>
            <span>help</span>
        </div>
        <div class="pilihan">
            <i class='bx bxs-help-circle'></i>
            <span>help</span>
        </div>
    </div>

    <div class="pengaduan-wrapper">

        <div class="pengaduan-card">
            <div class="header-card">
                <div class="profile-user">
                    <img src="../../img/fitur-pengaduan/asset-user-1.png" alt="">
                    <div class="profile-time">
                        <h3>Nyoman Lanang</h3>
                        <span><i class='bx bxs-time'></i> 2 hari yang lalu</span>
                    </div>
                </div>
                <div class="status-wrapper">
                    <div class="status">
                        <h2>Selesai</h2>
                    </div>
                </div>
            </div>
            <div class="body-card">
                <div class="text">
                    <p>Wilayah depan pertokoan A terdapat adanya jalan lubang yang menyebabkan banyak pengendara hampir terjatuh, kondisi bisa dilihat pada foto. Selanjutnya terdapat trotoar jalan yang sudah ambruk dimana material berserakan dimana-mana, lokasinya deket toko B. Beberapa ada got trotoar jalan yang mengalami jebol dan membuat jalan arus air menjadi tersumbat ini berada disekitaran lokasi, jadi mohon pihak berwajib untuk segera perbaiki agar tidak memburuk.</p>
                </div>
                <div class="foto">
                    <img class="foto1" src="../../img/fitur-pengaduan/pengaduan/asset-nyoman-1.png" alt="">
                    <img class="foto2" src="../../img/fitur-pengaduan/pengaduan/asset-nyoman-2.png" alt="">
                    <img class="foto3" src="../../img/fitur-pengaduan/pengaduan/asset-nyoman-3.png" alt="">
                </div>
            </div>
            <div class="footer-card"></div>
        </div>

        <div class="pengaduan-card">
            <div class="header-card">
                <div class="profile-user">
                    <img src="../../img/fitur-pengaduan/asset-user-1.png" alt="">
                    <div class="profile-time">
                        <h3>Nyoman Lanang</h3>
                        <span><i class='bx bxs-time'></i> 2 hari yang lalu</span>
                    </div>
                </div>
                <div class="status-wrapper">
                    <div class="status">
                        <h2>Selesai</h2>
                    </div>
                </div>
            </div>
            <div class="body-card">
                <div class="text">
                    <p>Wilayah depan pertokoan A terdapat adanya jalan lubang yang menyebabkan banyak pengendara hampir terjatuh, kondisi bisa dilihat pada foto. Selanjutnya terdapat trotoar jalan yang sudah ambruk dimana material berserakan dimana-mana, lokasinya deket toko B. Beberapa ada got trotoar jalan yang mengalami jebol dan membuat jalan arus air menjadi tersumbat ini berada disekitaran lokasi, jadi mohon pihak berwajib untuk segera perbaiki agar tidak memburuk.</p>
                </div>
                <div class="foto">
                    <img class="foto1" src="../../img/fitur-pengaduan/pengaduan/asset-nyoman-1.png" alt="">
                    <img class="foto2" src="../../img/fitur-pengaduan/pengaduan/asset-nyoman-2.png" alt="">
                    <img class="foto3" src="../../img/fitur-pengaduan/pengaduan/asset-nyoman-3.png" alt="">
                </div>
            </div>
            <div class="footer-card"></div>
        </div>

    </div>

</body>

</html>