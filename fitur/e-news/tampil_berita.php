<?php
require '../../fungsi/functions.php';

session_start();
if (isset($_SESSION['kecamatan'])) {
    $kecamatan = $_SESSION['kecamatan'];
    // var_dump($kecamatan);
}

if (isset($_SESSION['desa'])) {
    $desa = $_SESSION['desa'];
    // var_dump($desa);
    $imagePath = "../../img/$desa/desa.png";
}

// Memastikan koneksi sudah dibuat pada functions.php
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$query = "SELECT judul, ringkasan, isi FROM e_news";
$result = mysqli_query($conn, $query);

// Periksa apakah query gagal
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-news</title>
    <link rel="stylesheet" href="../../css/e_news.css">
</head>
<body>
    <div class="container-logo">
    <div class="logo-e-news">
    <img src="<?= $imagePath; ?>" alt="logoDesa">
        </div>
        <div class="text-desa">
    <h1 class="text-desa">Selamat datang di halaman berita <?= $desa; ?></h1>
    </div>
    </div>
   

    <div class="e-news_container">
      <img src="../../img_e_news/Asset 7.png" alt="" />
      <h2>E - NEWS</h2>
    </div>
    <div class="pengumuman">
      <div class="title-container">
        <h3>Pengumuman</h3>
      </div>
      <div class="title2-container">
        <img src="../../img_e_news/Asset 6.png" alt="" />
      </div>
      <div class="pengumuman pengumuman_contentBtn">
      <img src="../../img_e_news/Asset 1.png" alt="" />
    </div>

    <div class="berita-dan-gambar">
    <div class="berita">
      <h3>Berita</h3>
      </div>
      <div class="btnfilter">
      <a href="">Filter</a>
      </div>
      <div class="gambar-berita">
        <!-- <img src="../../img_e_news/Asset 5.png" alt=""> -->
      </div>
    
    </div>
    <div class="berita1">
      <img src="../../img_e_news/Asset 3.png" alt="" />
    </div>

    <div class="berita1">
      <img src="../../img_e_news/Asset 4.png" alt="" />
    </div>



    <?php
    // Loop untuk menampilkan semua baris data hasil query
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div>
            <h2><?php echo $row['judul']; ?></h2>
            <p><?php echo $row['ringkasan']; ?></p>
            <p><?php echo $row['isi']; ?></p>
        </div>

    <?php
    }
    ?>
    <script src="e-news.js"></script>
</body>
</html>
