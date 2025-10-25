<?php
// Konfigurasi koneksi ke database
$host = "localhost";   // Server database (biasanya localhost)
$user = "root";        // Username database
$pass = "";            // Password database (kosong jika di localhost/XAMPP)
$db   = "prakwebdb";   // Nama database kamu

// Membuat koneksi
$connect = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // Jika ingin cek status koneksi, bisa aktifkan baris ini saat debugging
    // echo "Koneksi berhasil ke database $db";
}
?>