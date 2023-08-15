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

// kategori pengaduan
if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $pengaduan = query("SELECT * FROM pengaduan WHERE id_kategori = '$kategori'");
} else {
    $pengaduan = query("SELECT * FROM pengaduan");
}
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
            <h1>Pengaduan</h1>
            <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
        </div>
    </header>

    <div class="kategori-wrapper">
        <a class="pilihan <?php if (!isset($_GET['kategori'])) : ?> selected <?php endif; ?>" href="index.php">
            <div class="circle">
                <i class='bx bxs-grid-alt'></i>
            </div>
            <span>Semua</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "1") echo "selected"; ?>" href="?kategori=1">
            <div class="circle">
                <i class='bx bxs-buildings'></i>
            </div>
            <span>Fasilitas Umum</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "2") echo "selected"; ?>" href="?kategori=2">
            <div class=" circle">
                <i class='bx bxs-clinic'></i>
            </div>
            <span>Layanan Kesehatan</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "3") echo "selected"; ?>" href="?kategori=3">
            <div class="circle">
                <i class='bx bxs-school'></i>
            </div>
            <span>Pendidikan</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "4") echo "selected"; ?>" href="?kategori=4">
            <div class="circle">
                <i class='bx bxs-florist'></i>
            </div>
            <span>Pertanian Peternakan</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "5") echo "selected"; ?>" href="?kategori=5">
            <div class="circle">
                <i class='bx bxs-trash'></i>
            </div>
            <span>Kebersihan</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "6") echo "selected"; ?>" href="?kategori=6">
            <div class="circle">
                <i class='bx bxs-group'></i>
            </div>
            <span>Sosial</span>
        </a>
        <a class="pilihan <?php if (isset($_GET['kategori']) && $kategori == "7") echo "selected"; ?>" href="?kategori=7">
            <div class="circle">
                <i class='bx bxs-lock'></i>
            </div>
            <span>Keamanan Ketertiban</span>
        </a>
    </div>

    <div class="add-pengaduan">
        <i class='bx bx-edit'></i>
    </div>

    <div class="form-pengaduan-wrapper">
        <div class="close-btn">
            <i class='bx bx-x'></i>
        </div>
        <div class="form-card">
            <h1>Form Pengaduan</h1>
            <form action="" method="post">
                <div class="input judul">
                    <label for="">Judul</label>
                    <input type="text" name="judul_pengaduan" id="judul_pengaduan" required>
                </div>
                <div class="input kategori">
                    <label for="">Kategori</label>
                    <select name="kategori_pengaduan" id="pilih-kategori" required>
                        <option value="1">Fasilitas Umum</option>
                        <option value="2">Layanan Kesehatan</option>
                        <option value="3">Pendidikan</option>
                        <option value="4">Pertanian & Peternakan</option>
                        <option value="5">Lingkungan & Kebersihan</option>
                        <option value="6">Sosial & Kesejahteraan</option>
                        <option value="7">Keamanan & Ketertiban</option>
                    </select>
                </div>
                <div class="input isi-pengaduan">
                    <label for="">Isi Pengaduan</label>
                    <textarea name="isi_pengaduan" id="isi_pengaduan" cols="30" rows="10"></textarea>
                </div>
                <div class="input unggah-file">
                    <div class="input-wrapper">
                        <i class='bx bx-image-add'></i>
                        <input type="file" name="foto_pengaduan" id="foto_pengaduan">
                    </div>
                </div>
                <div class="form-btn-wrapper">
                    <button name="submit_pengaduan">UNGGAH</button>
                </div>
            </form>
        </div>
    </div>



    <div class="pengaduan-wrapper">
        <?php foreach ($pengaduan as $row) : ?>
            <?php
            // Menghitung jumlah foto pada kartu saat ini
            $jumlah_foto = 0;
            for ($i = 1; $i <= 3; $i++) {
                $foto = "../../img/fitur-pengaduan/pengaduan/asset-" . $row['id'] . "-" . $i . ".png";
                if (file_exists($foto)) {
                    $jumlah_foto++;
                }
            }

            // Menentukan kelas foto berdasarkan jumlah foto
            $kelas_foto = 'foto-' . $jumlah_foto;
            ?>

            <div class="pengaduan-card">
                <div class="header-card">
                    <div class="profile-user">
                        <img src="../../img/fitur-pengaduan/asset-user-<?= $row['user']; ?>.png" alt="">
                        <div class="profile-time">
                            <h3><?= $row['user']; ?></h3>
                            <span><i class='bx bxs-time'></i><?= $row['waktu']; ?></span>
                        </div>
                    </div>
                    <div class="status-wrapper">
                        <div class="status <?= $row['status']; ?>">
                            <h2><?= $row['status']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="body-card">
                    <div class="judul">
                        <div class="judul-pengaduan">
                            <h4><?= $row['judul_pengaduan'] ?></h4>
                        </div>
                        <div class="kategori-pengaduan">
                            <span>Kategori : <?= $row['nama_kategori'] ?></span>
                        </div>
                    </div>
                    <div class="text">
                        <p><?= $row['isi_pengaduan']; ?></p>
                    </div>
                    <div class="foto <?= $kelas_foto; ?>">
                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                            <?php $idpengaduan = $row['id']; ?>
                            <?php $foto = "../../img/fitur-pengaduan/pengaduan/asset-$idpengaduan-" . $i . ".png"; ?>
                            <?php if (file_exists($foto)) : ?>
                                <img class="foto<?= $i ?>" src="<?= $foto ?>" alt="">
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="footer-card">
                    <i class='bx bx-message-rounded-dots'></i>
                    <i class='bx bx-bookmark'></i>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="pengaduan.js"></script>
</body>

</html>