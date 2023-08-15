<?php
require "../../fungsi/functions.php";
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
    <link rel="stylesheet" href="../../css/wisata-budaya.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Budaya</title>
</head>

<body>
    <div class="header">
        <a href="index.php"><i class='bx bxs-chevron-left'></i></a>
        <span>Budaya</span>
    </div>
    <div class="content-container">
        <div class="card">
            <img src="../../img/wisata-budaya/budaya/asset-budaya-1.png" alt="">
            <span><?= $desa; ?> | 2023</span>
            <div class="content">
                <div class="title">
                    <h3>Sanggar Tari</h3>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit unde laudantium voluptatum corrupti harum labore molestias accusantium sit veritatis dolores dicta, voluptas consequatur. Eaque alias dolore repellat, fugit eius quibusdam voluptas excepturi omnis facilis autem cum, tempore dolores commodi. Nesciunt blanditiis sint magnam facere porro velit distinctio eos est mollitia!</p>
                </div>
                <div class="card-content-btn">
                    <button>
                        <h4>Lebih Banyak</h4>
                        <i class='bx bxs-right-arrow'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>