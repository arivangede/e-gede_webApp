<?php
require 'fungsi/functions.php';

if (isset($_POST["kabupaten"])) {

    $id_kabupaten = $_POST["kabupaten"];
    $query = "SELECT * FROM kecamatan WHERE id_kabupaten = $id_kabupaten";
    $result_kecamatan = mysqli_query($conn, $query);

    if (mysqli_num_rows($result_kecamatan) > 0) {
        echo "<option value=''>Kecamatan</option>";
        while ($row = mysqli_fetch_assoc($result_kecamatan)) {
            $id_kecamatan = $row['id_kecamatan'];
            $nama_kecamatan = $row['nama_kecamatan'];
            echo "<option value='$id_kecamatan'>$nama_kecamatan</option>";
        }
    }
}
