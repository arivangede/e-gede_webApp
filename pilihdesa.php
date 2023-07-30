<?php
require 'fungsi/functions.php';
session_start();
if (!$_SESSION['login']) {
    header('Location: login.php');
}

$query_kabupaten = "SELECT * FROM kabupaten";
$result_kabupaten = $conn->query($query_kabupaten);

$conn->close();

if (isset($_POST['submit'])) {
    $_SESSION['kecamatan'] = $_POST['pilih-kecamatan'];
    $_SESSION['desa'] = $_POST['pilih-desa'];
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>e-GeDe | Pilih Desa</title>
</head>

<body>
    <header class="header-pilihdesa">
        <img src="img/assets/asset-pilihdesa-atas.png" alt="">
    </header>


    <section id="pilihdesa">
        <div class="card-pilihdesa">
            <div class="logo-pilihdesa">
                <span>Gerbang Desa Digital</span>
                <img src="img/assets/logo-egede.png" alt="">
            </div>
            <div class="card-pilihdesa-title">
                <h1>Pilih Desa</h1>
            </div>

            <form action="" method="post">
                <select name="pilih-kabupaten" id="pilih-kabupaten" required>
                    <option value="">Kabupaten / Kota</option>
                    <?php
                    if ($result_kabupaten->num_rows > 0) {
                        while ($row = $result_kabupaten->fetch_assoc()) {
                            $idkabupaten = $row['id_kabupaten'];
                            $namakabupaten = $row['nama_kabupaten'];
                            echo "<option value='$idkabupaten'>$namakabupaten</option>";
                        }
                    }
                    ?>
                </select>
                <select name="pilih-kecamatan" id="pilih-kecamatan" disabled required>
                    <option value="">Kecamatan</option>
                </select>
                <select name="pilih-desa" id="pilih-desa" disabled required>
                    <option value="">Desa / Kelurahan</option>
                </select>

                <button class="next-btn" name="submit" id="next-btn" disabled>
                    <i class='bx bxs-chevron-right'></i>
                </button>
            </form>

            <div class="back-btn-pilihdesa">
                <a href="fungsi/logout.php">Keluar</a>
            </div>
        </div>
    </section>

    <footer class="footer-pilihdesa">
        <img src="img/assets/asset-pilihdesa-bawah.png" alt="">
    </footer>


    <script>
        $(document).ready(function() {
            $("#pilih-kabupaten").on("change", function() {
                var idkabupaten = $(this).val();

                $.ajax({
                    url: "get_kecamatan.php",
                    type: "POST",
                    data: {
                        kabupaten: idkabupaten,
                    },
                    success: function(response) {
                        $('#pilih-kecamatan').prop("disabled", false);
                        $('#pilih-kecamatan').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Error:");
                        console.log("Status: " + status);
                        console.log("Error: " + error);
                    }
                })
            })

            $("#pilih-kecamatan").on("change", function() {
                var idkecamatan = $(this).val();

                $.ajax({
                    url: "get_desa.php",
                    type: "POST",
                    data: {
                        kecamatan: idkecamatan,
                    },
                    success: function(response) {
                        $('#pilih-desa').html('');
                        $('#pilih-desa').prop("disabled", false);
                        $('#pilih-desa').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Error:");
                        console.log("Status: " + status);
                        console.log("Error: " + error);
                    }
                })
            })

            $("#pilih-desa").on("change", function() {
                var iddesa = $(this).val();

                $.ajax({
                    type: "POST",
                    data: {
                        desa: iddesa,
                    },
                    success: function(response) {
                        if (iddesa !== "") {
                            $("#next-btn").prop("disabled", false);
                            $("#next-btn").addClass("active");
                        } else {
                            $("#next-btn").prop("disabled", true);
                            $("#next-btn").removeClass("active");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX Error:");
                        console.log("Status: " + status);
                        console.log("Error: " + error);
                    }
                })
            })
        })
    </script>
</body>

</html>