<?php
if (isset($_FILES['file'])) {
    $errors = [];
    $extensions = ["jpg", "jpeg", "png"];
    $total_files = count(value: $_FILES['file']['name']);

    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp  = $_FILES['file']['tmp_name'][$i];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "File '$file_name' memiliki ekstensi tidak valid.";
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = "File '$file_name' melebihi ukuran 2 MB.";
            continue;
        }

        if (move_uploaded_file($file_tmp, "uploads/" . $file_name)) {
            echo "File '$file_name' berhasil diunggah.<br>";
        } else {
            $errors[] = "Gagal mengunggah file '$file_name'.";
        }
    }

    if (!empty($errors)) {
        echo "<br><b>Error:</b><br>" . implode("<br>", $errors);
    }
}
?>