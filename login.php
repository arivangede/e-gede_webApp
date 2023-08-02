<?php
session_start();
require_once 'fungsi/functions.php'; // Memuat file functions.php yang berisi koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa login ke database berdasarkan username dan password
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Login berhasil
        $row = mysqli_fetch_assoc($result);

        // Tetapkan informasi login ke session
        $_SESSION['username'] = $row['username'];
        $_SESSION['jabatan'] = $row['jabatan'];
        $_SESSION['desa'] = $row['desa'];

        // Redirect ke halaman yang sesuai berdasarkan jabatan
        if ($row['jabatan'] === 'admin kota') {
            $_SESSION['login'] = true;
            header("Location: pilihdesa.php");
            exit();
        } elseif ($row['jabatan'] === 'admin desa') {
            $_SESSION['login'] = true;
            $_SESSION['desa'] = $row['desa'];
            $_SESSION['kecamatan'] = $row['kecamatan'];

            header("Location: home.php");
            exit();
        }
    } else {
        // Login gagal
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Login | e-GeDe</title>
</head>

<body>
    <section class="login-page">
        <div class="top-asset">
            <img src="img/assets/asset-2-login.png" alt="">
        </div>
        <div class="logo">
            <p>Gerbang Desa Digital</p>
            <img src="img/assets/logo-egede.png" alt="logo">
        </div>
        <div class="login-wrapper">
            <div class="title">
                <h1>Login</h1>
            </div>
            <?php if (isset($error)) : ?>
                <div class="error">
                    <p>Username / Password Salah</p>
                </div>
            <?php endif; ?>
            <div class="form">
                <form action="" method="post">
                    <div class="input">
                        <img src="img/icon/user.png" alt="">
                        <div class="spacer"></div>
                        <input type="text" name="username" autocomplete="off" placeholder="Username" required>
                    </div>
                    <div class="input">
                        <img src="img/icon/lock.png" alt="">
                        <div class="spacer"></div>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="login">
                        <img src="img/icon/login.png" alt="">
                        <p>LOGIN</p>
                    </button>
                </form>
            </div>
        </div>
        <div class="bottom-asset">
            <img src="img/assets/asset-1-login.png" alt="">
        </div>
    </section>
</body>

</html>