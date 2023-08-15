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

// e-pasar content

if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    $produk = query("SELECT * FROM ePasar WHERE kategori = '$kategori'");
} else {
    $produk = query("SELECT * FROM ePasar");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/e-pasar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>e-Pasar</title>
</head>

<body>
    <header>
        <a href="../../home.php"><i class='bx bx-arrow-back'></i></a>
        <img src="../../img/assets/asset-menu-10.png" alt="">
        <div class="title-fitur">
            <h1>E-PASAR</h1>
            <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
        </div>
    </header>
    <div class="search-kategori-wrapper">
        <form action="" method="post" class="search-wrapper">
            <input type="text">
            <i class='bx bx-search'></i>
        </form>
        <div class="kategori-wrapper">
            <h3>Kategori <?php if (isset($_GET['kategori'])) : ?> <a href="index.php">Reset Filter</a> <?php endif ?></h3>
            <div class="kategori-box">

                <a class="kategori-card 1 <?php if (isset($_GET['kategori']) && $kategori != "makanan") echo 'not-selected'; ?>" href="?kategori=makanan">
                    <div class="icon-circle">
                        <i class='bx bx-bowl-hot'></i>
                    </div>
                    <span>Makanan</span>
                </a>


                <a class="kategori-card 2 <?php if (isset($_GET['kategori']) && $kategori != "minuman") echo 'not-selected'; ?>" href="?kategori=minuman">
                    <div class="icon-circle">
                        <i class='bx bxs-drink'></i>
                    </div>
                    <span>Minuman</span>
                </a>


                <a class="kategori-card 3 <?php if (isset($_GET['kategori']) && $kategori != "sembako") echo 'not-selected'; ?>" href=" ?kategori=sembako">
                    <div class="icon-circle">
                        <i class='bx bxs-package'></i>
                    </div>
                    <span>Sembako</span>
                </a>


                <a class="kategori-card 4 <?php if (isset($_GET['kategori']) && $kategori != "pakaian") echo 'not-selected'; ?>"" href=" ?kategori=pakaian">
                    <div class="icon-circle">
                        <i class='bx bx-closet'></i>
                    </div>
                    <span>Pakaian</span>
                </a>


                <a class="kategori-card 5 <?php if (isset($_GET['kategori']) && $kategori != "lain-lain") echo 'not-selected'; ?>"" href=" ?kategori=lain-lain">
                    <div class="icon-circle">
                        <i class='bx bx-question-mark'></i>
                    </div>
                    <span>Lainnya</span>
                </a>

            </div>
        </div>
    </div>

    <div class="e-pasar-content">

        <?php foreach ($produk as $row) : ?>
            <div class="content-card">
                <img src="../../img/fitur-ePasar/<?= $row['nama_barang'] ?>.png" alt="">
                <div class="content-desc">
                    <h4><?= $row['nama_barang'] ?></h4>
                    <span>Rp.<?= $row['harga'] ?>,-</span>
                    <p><?= $row['toko'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>