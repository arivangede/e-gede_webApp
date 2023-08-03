<?php
session_start();
if (isset($_SESSION['desa'])) {
    $desa = $_SESSION['desa'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/e_news.css">
</head>

<body>
    <div class="berita-wraper">
        <div class="head-berita">
            <a href="index.php"> <i class='bx bxs-chevron-left'> </i> Kembali</a>
            <div class="judul-berita">
                <h2>Perayaan Hari Ulang Tahun Kota Denpasar Ke 234 Tahun</h2>
                <p>Rabu, 09 Maret 2023</p>
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
        <div class="isi-berita">
            <div class="gambar-berita">
                <img src="../../img/fitur-enews/asset-gambar-berita.png" alt="">
            </div>

            <div class="text-berita">
                <p>
                    Bertepatan dengan HUT Kota Denpasar ke 234 tahun, Pemerintah Kota Denpasar melakukan Apel Pagi yang diiringi dengan Penampilan Korp Musik Kota Denpasar yang bertempat di Halaman Kantor Walikota Denpasar.
                </p>
                <p>
                    Anggota Korp Musik Kota Denpasar tersebut terdiri dari berbagai perangkat daerah yang salah satunya berasal dari Bagian Hukum Setda Kota Denpasar, yakni A.A. Ngr. Rian Priambada, S.H. dan Kadek Aswari, S.H.
                </p>
                <p>
                    Penampilan Korp Musik pada hari Minggu, 27 Pebruari 2022 ini dihadiri langsung oleh Walikota Denpasar dan Wakil Walikota Denpasar, Sekretaris Daerah Kota Denpasar, Ketua Kejaksaan, Polri, dan seluruh OPD yang diwakili oleh 5 orang peserta. Diharapkan dengan adanya kegiatan ini dapat menambah rasa cinta dan semangat untuk berkontribusi terhadap Kota Denpasar.
                </p>
                <p>
                    "Vasudhaiva Kutumbakam sebagai penguat ketahanan sosial dan ekonomi menuju Denpasar Maju"
                    Bertepatan dengan HUT Kota Denpasar ke 234 tahun, Pemerintah Kota Denpasar melakukan Apel Pagi yang diiringi dengan Penampilan Korp Musik Kota Denpasar yang bertempat di Halaman Kantor Walikota Denpasar.
                </p>
                <p>
                    Anggota Korp Musik Kota Denpasar tersebut terdiri dari berbagai perangkat daerah yang salah satunya berasal dari Bagian Hukum Setda Kota Denpasar, yakni A.A. Ngr. Rian Priambada, S.H. dan Kadek Aswari, S.H.
                </p>
                <p>
                    Penampilan Korp Musik pada hari Minggu, 27 Pebruari 2022 ini dihadiri langsung oleh Walikota Denpasar dan Wakil Walikota Denpasar, Sekretaris Daerah Kota Denpasar, Ketua Kejaksaan, Polri, dan seluruh OPD yang diwakili oleh 5 orang peserta. Diharapkan dengan adanya kegiatan ini dapat menambah rasa cinta dan semangat untuk berkontribusi terhadap Kota Denpasar.
                </p>
                <p>
                    "Vasudhaiva Kutumbakam sebagai penguat ketahanan sosial dan ekonomi menuju Denpasar Maju"
                </p>
            </div>
        </div>
    </div>
</body>

</html>