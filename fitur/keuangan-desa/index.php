<?php
require '../../fungsi/functions.php';
session_start();
if (isset($_SESSION['desa'])) {
  $id_desa = $_SESSION['desa'];

  $query_desa = "SELECT nama_desa FROM desa WHERE id_desa = $id_desa";
  $result_desa = mysqli_query($conn, $query_desa);

  if (mysqli_num_rows($result_desa) > 0) {
    $row_desa = mysqli_fetch_assoc($result_desa);
    $nama_desa = $row_desa['nama_desa'];
  }
}
$desa = $nama_desa;

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/keuangan-desa.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>APBDES 2023</title>
</head>

<body>
  <header>
    <div class="back-btn">
      <i class='bx bxs-chevron-left'></i>
      <a href="keuangan-desa.php"><span>Kembali</span></a>
    </div>

    <div class="header-content-wrapper">
      <select name="pilih-halaman" id="pilih-halaman">
        <option value="belanja" selected>Halaman Belanja</option>
        <option value="pendapatan">Halaman Pendapatan</option>
        <option value="pembiayaan">Halaman Pembiayaan</option>
      </select>

      <div class="header-wrapper">
        <h1>APBDES 2023</h1>
        <span><?= $desa; ?></span>
      </div>
    </div>
  </header>

  <section id="belanja" class="section">
    <img src="../../img/img-keuangan-desa/belanja-desa/asset.png" alt="">
  </section>
  <section id="pendapatan" class="section" style="display: none;">
    <img src="../../img/img-keuangan-desa/pendapatan-desa/asset.png" alt="">
  </section>
  <section id="pembiayaan" class="section" style="display: none;">
    <img src="../../img/img-keuangan-desa/pembiayaan-desa/asset.png" alt="">
  </section>

  <script src="keuangan-desa.js"></script>
</body>

</html>