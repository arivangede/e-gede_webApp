-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 11, 2023 at 02:13 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e_gede`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `jabatan`, `desa`, `kecamatan`) VALUES
(1, 'tuedi', 'tuedi1234', 'admin desa', '2', '2\r\n'),
(2, 'arivan', 'arivan1234', 'admin desa', '1', '1'),
(3, 'rama', 'rama1234', 'admin desa', '3', '4'),
(4, 'gede', 'gede1234', 'admin kota', '', '3'),
(5, 'admin1', 'admin1234', 'admin kota', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ringkasan` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `ringkasan`, `isi`, `foto`) VALUES
(1, 'tuedi dan tiang', 'tuedi meihat tiang dijalanan', 'tuedi dan tiang sedang berada dipinggir jalan dan saling melihat', 'pertik.jpeg'),
(2, 'arivan dan anjing', 'arivan bersama anjing sedang bermain voli', 'arivan dan anjingnya sedang bermain voli dilapangan bulutangkis bersama anjingnya', 'arivan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(255) NOT NULL,
  `id_desa` varchar(255) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `id_desa`, `nama_desa`, `id_kecamatan`) VALUES
(1, '1', 'Dauh Puri Kaja', '1'),
(2, '2', 'Tegal Kertha', '2'),
(3, '3', 'Sanur Kauh', '4'),
(4, '4', 'Padang Sambian Kelod', '2'),
(5, '5', 'Pemecutan Kelod', '2'),
(6, '6', 'Peguyangan Kangin', '1'),
(7, '7', 'Dangin Puri Kelod', '3'),
(8, '8', 'Kesiman Kertalangu', '3'),
(9, '9', 'Pemogan', '4'),
(10, '10', 'Sidakarya', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ePasar`
--

CREATE TABLE `ePasar` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `toko` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ePasar`
--

INSERT INTO `ePasar` (`id`, `nama_barang`, `kategori`, `harga`, `toko`) VALUES
(1, 'Beras-25kg', 'sembako', '315.000', 'toko sukses'),
(2, 'Ulmus x Variegata', 'lain-lain', '350.000', 'Janger Bonsai Bali'),
(3, 'Kamen Pria & Wanita', 'pakaian', '80.000', 'Bali Classic'),
(4, 'Salad Buah 400ml', 'makanan', '40.000', 'Bali Foodie'),
(5, 'Aqua Gelas', 'minuman', '32.100', 'BUMDES'),
(6, 'Telor-Krat', 'sembako', '48.000', 'BUMDES');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(255) NOT NULL,
  `id_kabupaten` varchar(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `id_kabupaten`, `nama_kabupaten`) VALUES
(1, '1', 'Gianyar'),
(2, '2', 'Badung'),
(3, '3', 'Tabanan'),
(4, '4', 'Karangasem'),
(5, '5', 'Denpasar'),
(6, '6', 'Jembrana'),
(7, '7', 'Buleleng'),
(8, '8', 'Kelungkung');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `id_kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(1, '1', 'Denpasar Utara', '5'),
(2, '2', 'Denpasar Barat', '5'),
(3, '3', 'Denpasar Timur', '5'),
(4, '4', 'Denpasar Selatan', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `judul_pengaduan` varchar(255) NOT NULL,
  `id_kategori` int(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `isi_pengaduan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `waktu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `judul_pengaduan`, `id_kategori`, `nama_kategori`, `isi_pengaduan`, `status`, `user`, `waktu`) VALUES
(1, 'jalan rusak , trotoar jebol & hancur', 1, 'Infrastruktur & Fasilitas Umum', 'Wilayah depan pertokoan A terdapat adanya jalan lubang yang menyebabkan banyak pengendara hampir terjatuh, kondisi bisa dilihat pada foto. Selanjutnya terdapat trotoar jalan yang sudah ambruk dimana material berserakan dimana-mana, lokasinya deket toko B. Beberapa ada got trotoar jalan yang mengalami jebol dan membuat jalan arus air menjadi tersumbat ini berada disekitaran lokasi, jadi mohon pihak berwajib untuk segera perbaiki agar tidak memburuk.', 'menunggu', 'Nyoman Lanang', '2 hari yang lalu'),
(2, 'sampah berserakan di area dekat persawahan', 5, 'Lingkungan & Kebersihan', 'Terdapat adanya sampah berserakan yang mengganggu pengguna jalan serta pejalan kaki yang lewat karena tidak enak dipandang dan bearoma busuk, hal ini membuat citra lingkungan persawahan menjadi rusak serta membuat reputasi nama kota kita menjadi turun di kalangan orang luas. Bagi pengendara ataupun masyarakat sekitar lokasi tolong kesadarannya untuk saling menjaga lingkungan agar tetap bersih, dan bagi pihak berwajib agar segera diatasi hal yang seperti ini.', 'proses', 'Putu Suliastini', '3 hari yang lalu'),
(3, 'Kebakaran Rumah', 6, 'Sosial & Kesejahteraan', 'Kebakaran ini menyebabkan banyak sekali kerugian terhadap pihak yang terkena dampak, mulai dari kehilangan rumah, transportasi, makanan, dan lainnya. Dimohonkan untuk pihak yang berwenang supaya cepat diatasi terkait kasus yang terjadi, supaya temen2 kita segera mendapat perlakuan terhadap kejadian ini. ', 'selesai', 'Juanedi Alamsyah', '4 hari lalu');

-- --------------------------------------------------------

--
-- Table structure for table `sub_topik`
--

CREATE TABLE `sub_topik` (
  `id` int(11) NOT NULL,
  `idtopik` int(11) NOT NULL,
  `sub_topik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_topik`
--

INSERT INTO `sub_topik` (`id`, `idtopik`, `sub_topik`) VALUES
(1, 1, 'Umur'),
(2, 1, 'Agama'),
(3, 1, 'Jenis Kelamin'),
(4, 1, 'Usaha/UMKM'),
(5, 1, 'Pekerjaan'),
(6, 1, 'Penghasilan'),
(7, 1, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id` int(11) NOT NULL,
  `topik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `topik`) VALUES
(1, 'Statistik Penduduk'),
(2, 'Statistik Keluarga'),
(3, 'Statistik Bantuan'),
(4, 'Statistik Lainnnya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`) VALUES
(1, 'Nyoman Lanang'),
(2, 'Putu Suliastini'),
(3, 'Juanedi Alamsyah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ePasar`
--
ALTER TABLE `ePasar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_topik`
--
ALTER TABLE `sub_topik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ePasar`
--
ALTER TABLE `ePasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_topik`
--
ALTER TABLE `sub_topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
