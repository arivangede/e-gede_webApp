<?php
 require 'fungsi/functions.php';

 if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST["kecamatan"])){

    $id_kecamatan = $_POST["kecamatan"];

    //lakukan query ke database untuk mendapatkan desa dari id kecamatan
    $query = "SELECT * FROM desa WHERE id_kecamatan = $id_kecamatan";
    $result_desa = mysqli_query($conn,$query);

  if ($result_desa && mysqli_num_rows($result_desa) > 0) {
    // Lanjutkan dengan pengulangan data dan tampilkan opsi desa
    while ($row = mysqli_fetch_assoc($result_desa)) {
        $id_desa = $row['id_desa'];
        $nama_desa = $row['nama_desa'];
        echo "<option value= '' >Pilih</option>";
        echo "<option value='$nama_desa'>$nama_desa</option>";
    }
} else {
    // Tampilkan pesan jika tidak ada desa yang tersedia
    echo "<option value=''>Tidak ada desa yang tersedia</option>";
}
 }



?>