<?php
require '../../fungsi/functions.php';
session_start();

if (!$_SESSION['login']) {
  header('Location: login.php');
}

if (isset($_SESSION['kecamatan'])) {

  $id_kecamatan = $_SESSION['kecamatan'];
  $query_kecamatan = "SELECT nama_kecamatan FROM kecamatan WHERE id_kecamatan = $id_kecamatan";
  $result_kecamatan = mysqli_query($conn, $query_kecamatan);
  if (mysqli_num_rows($result_kecamatan) > 0) {
    $row_kecamatan = mysqli_fetch_assoc($result_kecamatan);
    $nama_kecamatan = $row_kecamatan['nama_kecamatan'];
    $kecamatan = $nama_kecamatan;
  }
}

if (isset($_SESSION['desa'])) {
  $id_desa = $_SESSION['desa'];
  $query_desa = "SELECT nama_desa FROM desa WHERE id_desa = $id_desa";
  $result_desa = mysqli_query($conn, $query_desa);
  if (mysqli_num_rows($result_desa) > 0) {
    $row_desa = mysqli_fetch_assoc($result_desa);
    $nama_desa = $row_desa['nama_desa'];
    $desa = $nama_desa;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Regulasi</title>
  <link rel="stylesheet" href="../../css/regulasi.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="head-regulasi">
    <div class="Btnbackhome">
      <i class='bx bx-arrow-back'></i>
    </div>
    <div class="head-regulasi-img">
      <img src="../../img_regulasi/regulasi/Assets 1.png" alt="" />
    </div>
    <div class="judul-regulasi">
      <div class="head-regulasi-tittle">
        <p>Regulasi Desa</p>
      </div>
      <div class="head-regulasi-tittle1">
        <p><span> Desa <?= $desa ?></span>, Kec. <?= $kecamatan ?></p>
      </div>
    </div>
  </div>
  <div class="kategori-regulasi">
    <p>kategori</p>
  </div>
  <div class="body-regulasi">
    <div class="Btnhukum">
      <div class="hukum-regulasi">
        <img src="../../img_regulasi/regulasi/Assets 4.png" alt="">
      </div>
    </div>
    <div class="Btnpublic">
      <div class="public-regulasi">
        <img src="../../img_regulasi/regulasi/Assets 5.png" alt="">
      </div>
    </div>
  </div>




  <script src="regulasi.js"></script>
</body>

</html>