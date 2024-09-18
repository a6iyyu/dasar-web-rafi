<?php
$a = 10;
$b = 5;

$hasil_tambah = $a + $b;
$hasil_kurang = $a - $b;
$hasil_kali = $a * $b;
$hasil_bagi = $a / $b;
$sisa_bagi = $a % $b;
$pangkat = $a ** $b;

$hasil_sama = $a == $b;
$hasil_tidak_sama = $a != $b;
$hasil_lebih_kecil = $a < $b;
$hasil_lebih_besar = $a > $b;
$hasil_lebih_kecil_sama = $a <= $b;
$hasil_lebih_besar_sama = $a >= $b;

$hasil_and = $a && $b;
$hasil_or = $a || $b;
$hasil_not_a = !$a;
$hasil_not_b = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasil_identik = $a === $b;
$hasil_tidak_identik = $a !== $b;

$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kursi_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Total kursi: {$total_kursi} <br />";
echo "Kursi terisi: {$kursi_terisi} <br />";
echo "Kursi kosong: {$kursi_kosong} <br />";
echo "Persentase kursi kosong: " . round($persentase_kursi_kosong, 2) . "% <br />";
?>