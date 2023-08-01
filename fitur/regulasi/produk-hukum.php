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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Hukum</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/regulasi.css">
</head>
<body>
    <div class="head-produk-hukum">
        <div class="btnkembali-produk-hukum">
            <a href="regulasi.php"><i class='bx bx-chevron-left'></i> Kembali</a>
        </div>
        <div class="judul-produk-hukum">
            <div class="pembungkus-judul">
            <div class="judul1">
                <h1>Produk Hukum</h1>
            </div>
            <div class="judul2">
                <h2><?=$desa?></h2>
            </div>
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
            <div class="pembungkus-tabel">
                <div class="row-table">
                    <label for="select-table">Tampilkan</label>
                    <select name="table" id="select-table">
                       <option value="">1</option>
                       <option value="">2</option>
                       <option value="">3</option>
                       <option value="">4</option>
                       <option value="">5</option>
                       <option value="">6</option>
                       <option value="">7</option>
                       <option value="">8</option>
                       <option value="">9</option>
                       <option value="">10</option>
                    </select>
                    <label for="select-table">Entri</label>
                </div>
           <div class="table-produk-hukum">
            <table>
                <tr>
                    <th class="no">No</th>
                    <th>Judul Informasi</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Tanggal Upload</th>
                    <th class="aksi">Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>PERDES</td>
                    <td>2022</td>
                    <td>Informasi berkala</td>
                    <td>2023-01-30 13:44:31</td>
                    <td><div class="lihat-dokumen">Lihat Dokumen</div></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PERDES</td>
                    <td>2021</td>
                    <td>Informasi berkala</td>
                    <td>2023-11-30 12:43:32</td>
                    <td><div class="lihat-dokumen">Lihat Dokumen</div></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>PERDES</td>
                    <td>2020</td>
                    <td>Informasi berkala</td>
                    <td>2023-09-30 09:43:32</td>
                    <td><div class="lihat-dokumen">Lihat Dokumen</div></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>PARKEL</td>
                    <td>2022</td>
                    <td>Informasi berkala</td>
                    <td>2023-07-30 10:43:32</td>
                    <td><div class="lihat-dokumen">Lihat Dokumen</div></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>PARKEL</td>
                    <td>2021</td>
                    <td>Informasi berkala</td>
                    <td>2023-03-30 11:09:08</td>
                    <td><div class="lihat-dokumen">Lihat Dokumen</div></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>PARKEL</td>
                    <td>2020</td>
                    <td>Informasi berkala</td>
                    <td>2023-04-30 11:08:21</td>
                    <td><div class="lihat-dokumen">Lihat Dokumen</div></td>
                </tr>
            </table>
           </div> 
           <div class="pilih-table">
                <p>Sebelumnya</p>
                <div class="pilih-table-sebelumnya">
                    <p>1</p>
                </div>
                <div class="pilih-table-selanjutnya">
                <p>2</p>
                </div>
                <p>Selanjutnya</p>
                </div>
                </div>
           
           </div>
    </div>
</body>
</html>