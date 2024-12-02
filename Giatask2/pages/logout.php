<?php
session_start();
session_destroy(); // Hapus sesi
header("Location: login.php"); // Kembali ke halaman login setelah logout
exit;
?>
