<?php
session_start();

if (!empty($_SESSION['username'])) {
    require_once '../config/koneksi.php';
    require_once '../fungsi/pesan_kilat.php';
    require_once '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan']) && $_GET['jabatan'] == 'hapus') {
        $id = antiinjection($koneksi, $_GET['id']);

        $query = "DELETE FROM jabatan WHERE id = '$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Data jabatan berhasil dihapus.");
        } else {
            pesan('danger', "Gagal menghapus data jabatan karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=jabatan");
        exit();
    }
}
?>
