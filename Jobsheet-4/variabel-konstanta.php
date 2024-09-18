<?php
$angka_1 = 10;
$angka_2 = 5;
$hasil = $angka_1 + $angka_2;
echo "Hasil penjumlahan $angka_1 dan $angka_2 adalah $hasil. <br />";

$benar = true;
$salah = false;
echo "Variabel benar adalah $benar dan variabel salah adalah $salah. <br />";

// Mendefinisikan konstanta untuk nilai tetap.
define("NAMA_SITUS", "websiteku.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>