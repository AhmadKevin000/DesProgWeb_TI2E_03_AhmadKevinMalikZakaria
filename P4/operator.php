<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo"Hasil Tambah dari $a dan $b: $hasilTambah<br>";
echo"Hasil Kurang dari $a dan $b: $hasilKurang<br>";
echo"Hasil Kali dari $a dan $b: $hasilKali<br>";
echo"Hasil Bagi dari $a dan $b: $hasilBagi<br>";
echo"Sisa Bagi dari $a dan $b: $sisaBagi<br>";
echo"Hasil Pangkat dari $a dan $b: $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama dari $a dan $b: " . ($hasilSama ? "true" : "false") . "<br>";
echo "Hasil Tidak Sama dari $a dan $b: " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil dari $a dan $b: " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar dari $a dan $b: " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil Sama dari $a dan $b: " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar Sama dari $a dan $b: " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

$hasilAnd   = $a && $b;
$hasilOr    = $a || $b;
$hasilNotA  = !$a;
$hasilNotB  = !$b;

echo "Hasil AND dari $a && $b: " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil OR dari $a || $b: " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil NOT dari $a: " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil NOT dari $b: " . ($hasilNotB ? "true" : "false") . "<br>";

$a += $b;
echo "\$a += \$b = $a <br>";
$a -= $b;
echo "\$a -= \$b = $a <br>";
$a *= $b;
echo "\$a *= \$b = $a <br>";
$a /= $b;
echo "\$a /= \$b = $a <br>";
$a %= $b;
echo "\$a %= \$b = $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "\$a === \$b : " . (($a === $b) ? "true" : "false") . "<br>";
echo "\$a !== \$b : " . (($a !== $b) ? "true" : "false") . "<br>";

$jumlahKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $jumlahKursi - $kursiTerisi;

$persenKosong = ($kursiKosong / $jumlahKursi) * 100;

echo "Jumlah kursi: $jumlahKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . number_format($persenKosong, 2) . "% <br>";
?>