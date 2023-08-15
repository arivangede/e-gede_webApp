<?php
require '../../fungsi/functions.php';

$jenis_surat = array(); // Inisialisasi array

if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $query = "SELECT nama_surat FROM esurat WHERE kategori = '$kategori'";
} else {
    $query = "SELECT nama_surat FROM esurat";
}
$result = mysqli_query($conn, $query);


if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $jenis_surat[] = $row['nama_surat'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Surat</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/layanan-publik.css">
</head>

<body>

    <div class="container-esurat">
        <div class="head-esurat">
            <a href="layanan-publik.php"><i class='bx bx-chevron-left'></i>Kembali</a>
        </div>
        <div class="ketegori-esurat">

            <div class="btn-pick <?php if (isset($_GET['kategori']) && $kategori != 'semua') echo 'not-selected'; ?>">
                <a href="e-surat.php">
                    <div class="pembungkus-head-esurat">
                        <div class="head-kategori-esurat">
                            <i class='bx bx-grid'></i>
                        </div>
                        <div class="head-kategori2-esurat">
                            <p>Semua</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="btn-pick <?php if (isset($_GET['kategori']) && $kategori != 'umum') echo 'not-selected'; ?>">
                <a href="e-surat.php?kategori=umum">
                    <div class="pembungkus-head-esurat">
                        <div class="head-kategori-esurat">
                            <i class='bx bx-home-circle'></i>
                        </div>
                        <div class="head-kategori2-esurat">
                            <p>Umum</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="btn-pick <?php if (isset($_GET['kategori']) && $kategori != 'kependudukan') echo 'not-selected'; ?>">
                <a href="e-surat.php?kategori=kependudukan">
                    <div class="pembungkus-head-esurat">
                        <div class="head-kategori-esurat">
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="head-kategori2-esurat">
                            <p>Kependudukan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="btn-pick <?php if (isset($_GET['kategori']) && $kategori != 'nikah') echo 'not-selected'; ?>">
                <a href="e-surat.php?kategori=nikah">
                    <div class="pembungkus-head-esurat">
                        <div class="head-kategori-esurat">
                            <i class='bx bx-male-female'></i>
                        </div>
                        <div class="head-kategori2-esurat">
                            <p>Nikah</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="btn-pick <?php if (isset($_GET['kategori']) && $kategori != 'pertanahan') echo 'not-selected'; ?>">
                <a href="e-surat.php?kategori=pertanahan">
                    <div class="pembungkus-head-esurat">
                        <div class="head-kategori-esurat">
                            <i class='bx bx-landscape'></i>
                        </div>
                        <div class="head-kategori2-esurat">
                            <p>Pertanahan</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="jenis-surat-wrapper">
        <div class="jenis-surat">

            <?php foreach ($jenis_surat as $nama_surat) : ?>

                <div class="pembungkus-surat">
                    <img src="../../img/layanan-publik/<?= $nama_surat ?>.png" alt="">
                    <p><?= $nama_surat ?></p>
                </div>

            <?php endforeach; ?>
        </div>
    </div>


    <script src="layanan-publik.js"></script>
</body>

</html>