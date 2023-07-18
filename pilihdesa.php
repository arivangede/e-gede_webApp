<?php
session_start();
require_once 'fungsi/functions.php'; // Memuat file functions.php yang berisi koneksi ke database

// Ambil data kabupaten dari tabel kabupaten
$query_kabupaten = "SELECT * FROM kabupaten";
$result_kabupaten = mysqli_query($conn, $query_kabupaten);

// Set nilai awal variabel pilihan
$selected_kabupaten = isset($_POST['kabupaten']) ? $_POST['kabupaten'] : "";
$selected_kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : "";
$selected_desa = isset($_POST['desa']) ? $_POST['desa'] : "";

// Cek apakah form sudah disubmit
if (isset($_POST['submit'])) {
    // Redirect ke halaman desa.php dengan parameter yang diperlukan
    $_SESSION['desa'] = $selected_desa;
    header("Location: desa.php");
    exit();
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>Pilih Desa</title>
</head>

<body>
    <form action="" method="POST">
        <h2>Pilih Kabupaten:</h2>
        <select name="kabupaten" onchange="this.form.submit()">
            <option value="">Pilih Kabupaten</option>
            <?php
            while ($row = mysqli_fetch_assoc($result_kabupaten)) {
                $id_kabupaten = $row['id_kabupaten'];
                $nama_kabupaten = $row['nama_kabupaten'];
                $selected = ($id_kabupaten == $selected_kabupaten) ? 'selected' : '';
                echo "<option value='$id_kabupaten' $selected>$nama_kabupaten</option>";
            }
            ?>
        </select>
        <br>

        <h2>Pilih Kecamatan:</h2>
        <?php
        // Ambil data kecamatan berdasarkan id_kabupaten yang dipilih
        $query_kecamatan = "SELECT * FROM kecamatan WHERE id_kabupaten = '$selected_kabupaten'";
        $result_kecamatan = mysqli_query($conn, $query_kecamatan);
        ?>
        <select name="kecamatan" onchange="this.form.submit()">
            <option value="">Pilih Kecamatan</option>
            <?php
            while ($row = mysqli_fetch_assoc($result_kecamatan)) {
                $id_kecamatan = $row['id_kecamatan'];
                $nama_kecamatan = $row['nama_kecamatan'];
                $selected = ($id_kecamatan == $selected_kecamatan) ? 'selected' : '';
                echo "<option value='$id_kecamatan' $selected>$nama_kecamatan</option>";
            }
            ?>
        </select>
        <br>

        <h2>Pilih Desa:</h2>
        <select type="text" name="desa" onchange="this.form.submit()">
            <option value="">Pilih Desa</option>
            <?php
            // Ambil data desa berdasarkan id_kecamatan yang dipilih
            $query_desa = "SELECT * FROM desa WHERE id_kecamatan = '$selected_kecamatan'";
            $result_desa = mysqli_query($conn, $query_desa);
            ?>


            <?php
            while ($row = mysqli_fetch_assoc($result_desa)) {
                $id_desa = $row['id_desa'];
                $nama_desa = $row['nama_desa'];
                $selected = ($nama_desa == $selected_desa) ? 'selected' : '';
                echo "<option value='$nama_desa' $selected>$nama_desa</option>";
            }
            ?>
        </select>
        <br>



        <?php if ($selected_desa != "") : ?>
            <button type="submit" name="submit" value="Submit">Submit</button>

        <?php endif; ?>

    </form>
    <?php if ($selected_desa == "") : ?>
        <button type="submit" name="submit" value="Submit" disabled>Submit</button>

    <?php endif; ?>



</body>

</html>