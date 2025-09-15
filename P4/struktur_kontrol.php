<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

//soal 4.3
$jumlahLahan = 10;
$jumlahPerLahan = 5;
$buahTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i < $jumlahLahan; $i++) { 
    $jumlahBuah += ($jumlahPerLahan * $buahTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br>";

//soal 4.4
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak luluc) <br>";
        continue;
    }
    echo "Niai: $nilai (Lulus)<br>";
}

//soal 4.5
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);

$nilaiTerpakai = array_slice($nilai, 2, -2);

$total = array_sum($nilaiTerpakai);

$rataRata = $total / count($nilaiTerpakai);

echo "Nilai yang digunakan: " . implode(", ", $nilaiTerpakai) . "<br>";
echo "Total nilai: $total <br>";
echo "Rata-rata: $rataRata <br>";

//soal 4.6
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";

//soal 4.7
$poin = 650;

$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah <br>";
?>
