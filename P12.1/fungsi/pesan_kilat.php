<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function set_flashdata($key, $value)
{
    $_SESSION['flashdata'][$key] = $value;
}

function get_flashdata($key)
{
    if (isset($_SESSION['flashdata'][$key])) {
        $data = $_SESSION['flashdata'][$key];
        unset($_SESSION['flashdata'][$key]); // Hapus setelah ditampilkan
        return $data;
    }
    return null;
}

function pesan($key, $pesan)
{
    $alert = "";

    if ($key == "info") {
        $alert = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Info!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        </div>";
    } elseif ($key == "success") {
        $alert = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Berhasil!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        </div>";
    } elseif ($key == "danger") {
        $alert = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Gagal!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        </div>";
    } elseif ($key == "warning") {
        $alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Peringatan!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        </div>";
    }

    set_flashdata($key, $alert);
}
?>
