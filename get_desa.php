<?php
require 'fungsi/functions.php';

if (isset($_POST["kecamatan"])) {

    $id_kecamatan = $_POST["kecamatan"];

    $query = "SELECT * FROM desa WHERE id_kecamatan = $id_kecamatan";
    $result_desa = mysqli_query($conn, $query);

    if ($result_desa && mysqli_num_rows($result_desa) > 0) {
        echo "<option value=''>Desa / Kelurahan</option>";
        while ($row = mysqli_fetch_assoc($result_desa)) {
            $id_desa = $row['id_desa'];
            $nama_desa = $row['nama_desa'];

            echo "<option value='$id_desa'>$nama_desa</option>";
        }
    } else {
        echo "<option value=''>Desa / Kelurahan</option>";
    }
}
