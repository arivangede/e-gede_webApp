<?php
require '../../fungsi/functions.php';
session_start();
if (isset($_SESSION['desa'])) {
  $id_desa = $_SESSION['desa'];

  $query_desa = "SELECT nama_desa FROM desa WHERE id_desa = $id_desa";
  $result_desa = mysqli_query($conn, $query_desa);

  if (isset($_SESSION['desa'])) {
    $row_desa = mysqli_fetch_assoc($result_desa);
    $nama_desa = $row_desa['nama_desa'];
    $desa = $nama_desa;
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Proyek Saya</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="container-halaman-index-keuangan-desa">
    <div class="select-halaman">
      <select class="selectpage-halaman" id="selectPage" onchange="showPage()">
        <option class="" value="0">Halaman Belanja</option>
        <option value="1">Halaman Pendapatan</option>
        <option value="2">Halaman Pembiayaan</option>
      </select>
    </div>
    <div class="Btnkembali">
      <a href="keuangan-desa.php"><i class='bx bx-chevron-left'></i>Kembali</a>
    </div>
    <div class="judul-keuangan">
      <div class="pembungkus-judul">
        <div class="text-judul">
          <p>APBDES 2023</p>
        </div>
        <div class="text-judul1">
          <p><?= $desa ?></p>
        </div>
      </div>

      <div class="sosial-media">

        <div class="facebook share">
          <i class='bx bxl-facebook-circle'></i>
        </div>
        <div class="twitter share">
          <i class='bx bxl-twitter'></i>
        </div>
        <div class="gmail share">
          <i class='bx bxs-envelope'></i>
        </div>
        <div class="link share">
          <i class='bx bx-link-alt'></i>
        </div>
      </div>
    </div>

  </div>

  <!-- Kontainer untuk menampilkan konten halaman -->
  <div class="page" id="page1">
    <div class="pembungkus-isi">
      <div class="isi-keuangan-desa">
        <p>Laporan Realisasi Pelaksanaan</p>
        <p>Anggaran Pendapatan dan Belanja Desa</p>
        <p>Pemerintah Desa <?= $desa ?></p>
        <p>Tahun Anggaran 2023</p>
      </div>
      <div class="isi-table-keuangan">
        <img src="../../img/img-keuangan-desa/img-apbdes/Assets 3.png" alt="">
      </div>
    </div>
    <!-- Tempatkan konten halaman belanja Anda di sini -->
  </div>
  <div class="page" id="page2">
    <div class="pembungkus-isi">
      <div class="isi-keuangan-desa">
        <p>Laporan Realisasi Pelaksanaan</p>
        <p>Anggaran Pendapatan dan Belanja Desa</p>
        <p>Pemerintah Desa <?= $desa ?></p>
        <p>Tahun Anggaran 2023</p>
      </div>
      <div class="isi-table-keuangan">
        <img src="../../img/img-keuangan-desa/pendapatan-desa/Assets 3.png" alt="">
      </div>
    </div>
    <!-- Tempatkan konten halaman pendapatan Anda di sini -->
  </div>
  <div class="page" id="page3">
    <div class="pembungkus-isi">
      <div class="isi-keuangan-desa">
        <p>Laporan Realisasi Pelaksanaan</p>
        <p>Anggaran Pendapatan dan Belanja Desa</p>
        <p>Pemerintah Desa <?= $desa ?></p>
        <p>Tahun Anggaran 2023</p>
      </div>
      <div class="isi-table-keuangan">
        <img src="../../img/img-keuangan-desa/belanja-desa/Assets 3.png" alt="">
      </div>
    </div>
    <!-- Tempatkan konten halaman lainnya Anda di sini -->
  </div>

  <script src="script.js"></script>
</body>

</html>