<?php
require 'fungsi/functions.php';

$query_kecamatan = "SELECT id_kecamatan, nama_kecamatan FROM kecamatan";
$resul_kecamatan = mysqli_query($conn, $query_kecamatan);


$query_desa = "SELECT id_desa, nama_desa FROM desa";
$resul_desa = mysqli_query($conn, $query_desa);

session_start(); // Pastikan memanggil session_start() di awal halaman

// Cek apakah ada data yang dikirim melalui POST
if (isset($_POST['submit']) && isset($_POST['pilihdesa'])) {
    $selected_desa = $_POST['pilihdesa'];
    $selected_kecamatan = $_POST['pilihkecamatan'];

    // Lakukan validasi jika diperlukan sebelum menyimpan ke session
    // Contoh: pastikan nilai $selected_desa valid dan aman untuk disimpan dalam session

    // Simpan nilai $selected_desa ke dalam session
    $_SESSION['kecamatan'] = $selected_kecamatan;
    $_SESSION['desa'] = $selected_desa;
   header("Location: desa.php");
    // Pastikan session sudah disimpan
    session_write_close();

    // Cetak nilai $selected_desa sebagai pengecekan (jika perlu)
    var_dump($selected_desa);
    var_dump($selected_kecamatan);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Pilih Desa</h1>

    <form action="" method="post">
<label for="kabupaten">Pilih Kabupaten</label><br>
    <select name="pilihkabupaten" id="kabupaten">
        <option value="">--Pilih--</option>
        <option value="denpasar">Denpasar</option> 
    </select><br>

    <label for="kecamatan">Pilih Kecamatan</label><br>
    <select name="pilihkecamatan" id="kecamatan">
        <option value="">--Pilih--</option>
       <?php
       while($row = mysqli_fetch_assoc($resul_kecamatan)){
            $id_kecamatan = $row['id_kecamatan'];
            $nama_kecamatan = $row['nama_kecamatan'];
            $selected = ($nama_kecamatan == $selected_kecamatan) ? 'selected' : "";
            echo "<option value= '$nama_kecamatan' $selected >$nama_kecamatan</option>";
       }
       ?>
        
    </select><br>

    <label for="desa">Pilih Desa</label><br>
    <select name="pilihdesa" id="desa">
        <option value="" >--Pilih--</option>
            <?php
            //tampilkan opsi desa pada element select 
            while($row = mysqli_fetch_assoc($resul_desa)){
                $id_desa = $row['id_desa'];
                $nama_desa = $row['nama_desa'];
                $selected = ($nama_desa == $selected_desa) ? 'selected' : "";
                echo "<option value ='$nama_desa' $selected >$nama_desa</option>";
            }
            ?>
    </select><br><br>

    
    <button type="submit" name="submit">Submit</button>
  </form>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function getDesa(){
        var kecamatanId = $('#kecamatan').val();
        $.ajax({
            url: 'get_desa.php',
            method: 'POST',
            data: { kecamatan: kecamatanId },
            success: function(response) { 
                // Memperbarui elemen desa dengan opsi yang dipilih
                $('#desa').html(response);
            },
            error: function() {
                alert('Terjadi kesalahan');
            }
        });
    }

    // Menjalankan fungsi getDesa saat ada perubahan pada select kecamatan
    $('#kecamatan').on('change', getDesa);
    </script>

  
</body>
</html>