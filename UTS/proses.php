<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST["nilai"];

    if ($nilai >= 80 && $nilai <= 100) {
        $huruf = "A";
    } elseif ($nilai >= 70) {
        $huruf = "B";
    } elseif ($nilai >= 60) {
        $huruf = "C";
    } elseif ($nilai >= 40) {
        $huruf = "D";
    } else {
        $huruf = "E";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Nilai Huruf</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Konversi Nilai</h1>
        <p>Nilai Angka Anda: <strong><?php echo $nilai; ?></strong></p>
        <p>Nilai Huruf: <strong style="color:#2b4b87;"><?php echo $huruf; ?></strong></p>
        <a href="index.html"><button>Kembali</button></a>
    </div>
</body>
</html>
