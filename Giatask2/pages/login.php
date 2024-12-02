<?php
// Mulai sesi untuk menangani login
session_start();

// Variabel untuk pesan error
$error_message = "";

// Proses login jika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simulasi pengecekan login (data login statis untuk demo)
    $valid_email = "user@example.com";
    $valid_password = "password123";  // Di dunia nyata, pastikan password menggunakan hashing

    // Validasi login
    if ($email === $valid_email && $password === $valid_password) {
        // Jika login berhasil, simpan informasi sesi
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_email'] = $email;
        
        // Redirect ke halaman dashboard atau halaman utama
        header("Location: dashboard.php");
        exit;
    } else {
        // Jika login gagal, simpan pesan kesalahan
        $error_message = "Email atau kata sandi salah!";
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Akun - GiaTask</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-container">
        <h2>Masuk ke Akun Anda</h2>

        <!-- Form Login -->
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <!-- Menampilkan pesan error jika login gagal -->
            <?php if (!empty($error_message)) { ?>
                <div class="error-message">
                    <?php echo $error_message; ?>
                </div>
            <?php } ?>

            <button type="submit">Masuk</button>
        </form>
    </div>

</body>
</html>
