<!DOCTYPE html>
<html>

<head>
  <title>Proyek Saya</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="container-halaman-index-keuangan-desa">
    <div class="Btnkembali">
      <a href="keuangan-desa.php"><i class='bx bx-chevron-left'></i>Kembali</a>
    </div>
  </div>

  <select id="selectPage" onchange="showPage()">
    <option value="0">Halaman Belanja</option>
    <option value="1">Halaman Pendapatan</option>
    <option value="2">Halaman Lainnya</option>
  </select>

  <!-- Kontainer untuk menampilkan konten halaman -->
  <div class="page" id="page1">

    <!-- Tempatkan konten halaman belanja Anda di sini -->
  </div>
  <div class="page" id="page2">
    <h2>Halaman Pendapatan</h2>
    <p>Ini adalah halaman pendapatan.</p>
    <!-- Tempatkan konten halaman pendapatan Anda di sini -->
  </div>
  <div class="page" id="page3">
    <h2>Halaman Lainnya</h2>
    <p>Ini adalah halaman lainnya.</p>
    <!-- Tempatkan konten halaman lainnya Anda di sini -->
  </div>

  <script src="script.js"></script>
</body>

</html>