<?php
// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek kecocokan email dan password (misal, menggunakan hardcoded atau dari database)
    // Di sini kita menggunakan contoh hardcoded untuk validasi login
    $valid_email = "user@example.com";  // Ganti dengan email valid
    $valid_password = "password123";    // Ganti dengan password yang sesuai

    if ($email === $valid_email && $password === $valid_password) {
        // Redirect ke halaman dashboard jika login berhasil
        header("Location: dashboard.php");
        exit();
    } else {
        // Tampilkan pesan error jika login gagal
        $error_message = "Email atau kata sandi salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Akun - GiaTask</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="login-box">
                <div class="logo-placeholder">
                    <img
                    src="./assets/logobiru.png"
                    alt="logo"
                    width="200"
                    height="120"
                    />
                </div>
                <h1>Masuk Akun</h1>
                <p>Masuk ke akun anda</p>

                <?php
                // Tampilkan pesan error jika ada
                if (isset($error_message)) {
                    echo '<p style="color:red; text-align:center;">' . $error_message . '</p>';
                }
                ?>

                <form action="" method="POST">
                    <div class="input-group">
                        <label for="email">Email/Nama</label>
                        <input type="text" id="email" name="email" placeholder="Masukkan email atau nama" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
                    </div>
                    <button type="submit">Masuk</button>
                </form>
                <p>Belum punya akun? <a href="register.php">Daftar</a></p>
            </div>
        </div>
    </div>
</body>
</html>
