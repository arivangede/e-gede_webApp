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
  <link rel="stylesheet" href="../../css/e_news.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>E-news</title>
</head>

<body>
  <header class="header-tampil">
    <i class='bx bx-arrow-back' onclick="backHome()"></i>
    <img src="../../img/assets/asset-menu-1.png" alt="">
    <div class="title-fitur">
      <h1>E-News</h1>
      <p><span>Desa <?= $desa; ?></span>, Kec. <?= $kecamatan; ?></p>
    </div>
  </header>

  <div class="pengumuman-box">
    <div class="title-box">
      <div>
        <h3>Pengumuman</h3>
      </div>
      <div class="selengkapnya-btn">
        <span>Lihat Semua</span>
        <i class='bx bxs-chevron-right'></i>
      </div>
    </div>

    <div class="pengumuman-card-screen">

      <div class="pengumuman-card-wrapper" onclick="pengumuman1()">
        <div class="card-pengumuman">
          <img src="../../img/fitur-enews/asset-card-pengumuman.png" alt="">
          <div class="card-content">
            <div class="card-title">
              <h3>E-KTP Perekaman</h3>
              <span>Jumat, 14 Juli 2017</span>
            </div>
            <div class="card-bottom">
              <div class="ringkasan-pengumuman">
                <p>
                  Kepada Warga Desa <?= $desa; ?> Khususnya dan
                  Kecamatan <?= $kecamatan ?> Umumnya, banwa mulal
                  tanggal 17 Juli 2017 Perekaman E-KTP dan Pengganti E-KTP
                  di tempatkan di Kantor Camat Denpasar Utara...
                </p>
              </div>
              <div class="button-wrapper">
                <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pengumuman-card-wrapper">
        <div class="card-pengumuman">
          <img src="../../img/fitur-enews/asset-card-pengumuman.png" alt="">
          <div class="card-content">
            <div class="card-title">
              <h3>Himbauan Atau Permakluman</h3>
              <span>Rabu, 04 Juli 2018</span>
            </div>
            <div class="card-bottom">
              <div class="ringkasan-pengumuman">
                <p>
                  Kepada seluruh masyarakat bahwa lapangan tidak
                  bisa dipergunakan karena ada penataan larangan
                  upacara lumintang...
                </p>
              </div>
              <div class="button-wrapper">
                <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pengumuman-card-wrapper">
        <div class="card-pengumuman">
          <img src="../../img/fitur-enews/asset-card-pengumuman.png" alt="">
          <div class="card-content">
            <div class="card-title">
              <h3>Selamat Hari Raya</h3>
              <span>Rabu, 13 Juni 2018</span>
            </div>
            <div class="card-bottom">
              <div class="ringkasan-pengumuman">
                <p>
                  Segenap jajaran Pemerintah Desa <?= $desa; ?>
                  beserta seluruh Staff mengucapkan SELAMAT HARI
                  RAYA IDHUL FITRI 1439 H/2018 M
                </p>
              </div>
              <div class="button-wrapper">
                <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="berita-box">
    <div class="title-box">
      <div class="title">
        <h3>Berita</h3>
      </div>
      <div class="filter-btn">
        <button><i class='bx bx-filter-alt'></i> Filter</button>
      </div>
    </div>

    <div class="berita-card-wrapper">

      <div class="berita-card" onclick="berita1()">
        <div class="berita-image">
          <img src="../../img/fitur-enews/asset-berita-1.png" alt="">
        </div>
        <div class="berita-content">
          <div class="berita">
            <div class="title">
              <h3>HUT Kota Denpasar ke-234</h3>
              <span>Rabu, 09 Maret 2022</span>
            </div>
            <div class="ringkasan">
              <p>HUT Kota Denpasar ke-234...</p>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </div>
      <div class="berita-card">
        <div class="berita-image">
          <img src="../../img/fitur-enews/asset-berita-2.png" alt="">
        </div>
        <div class="berita-content">
          <div class="berita">
            <div class="title">
              <h3>Laporan Anggaran Pendapatan Desa Tahun 2020</h3>
              <span>Selasa, 09 Maret 2021</span>
            </div>
            <div class="ringkasan">
              <p>Laporan Anggaran Pendapatan...</p>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </div>
      <div class="berita-card">
        <div class="berita-image">
          <img src="../../img/fitur-enews/asset-berita-3.png" alt="">
        </div>
        <div class="berita-content">
          <div class="berita">
            <div class="title">
              <h3>Rapat Koordinasi Kepsek SD SMP</h3>
              <span>Kamis, 15 Juni 2017</span>
            </div>
            <div class="ringkasan">
              <p>Rapat Koordinasi Kepsek...</p>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </div>
      <div class="berita-card">
        <div class="berita-image">
          <img src="../../img/fitur-enews/asset-berita-4.png" alt="">
        </div>
        <div class="berita-content">
          <div class="berita">
            <div class="title">
              <h3>Penyerahan Sertifikat PTSL</h3>
              <span>Senin, 23 April 2018</span>
            </div>
            <div class="ringkasan">
              <p>Penyerahan Sertifikat PTSL...</p>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </div>
      <div class="berita-card">
        <div class="berita-image">
          <img src="../../img/fitur-enews/asset-berita-5.png" alt="">
        </div>
        <div class="berita-content">
          <div class="berita">
            <div class="title">
              <h3>Kegiatan PROKASIH</h3>
              <span>Selasa, 24 Oktober 2017</span>
            </div>
            <div class="ringkasan">
              <p>Kegiatan PROKASIH...</p>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn">Lebih Banyak<i class='bx bxs-right-arrow'></i></button>
          </div>
        </div>
      </div>

    </div>

  </div>



  <script src="e-news.js"></script>
</body>

</html>