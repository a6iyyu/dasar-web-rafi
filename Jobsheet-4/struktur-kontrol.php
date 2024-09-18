<?php
$nilai_numerik = 92;

if ($nilai_numerik >= 90 && $nilai_numerik <= 100) echo "Nilai huruf adalah A.";
elseif ($nilai_numerik >= 80 && $nilai_numerik < 90) echo "Nilai huruf adalah B.";
elseif ($nilai_numerik >= 70 && $nilai_numerik < 80) echo "Nilai huruf adalah C.";
elseif ($nilai_numerik < 70) echo "Nilai huruf adalah D.";

$jarak_saat_ini = 0;
$jarak_target = 500;
$peningkatan_harian = 30;
$hari = 0;

while ($jarak_saat_ini < $jarak_target) {
  $jarak_saat_ini += $peningkatan_harian;
  $hari++;
}

echo "<br />Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlah_lahan = 10;
$tanaman_per_lahan = 5;
$buah_per_tanaman = 10;
$jumlah_buah = 0;

for ($i = 1; $i <= $jumlah_lahan; $i++) $jumlah_buah += ($tanaman_per_lahan * $buah_per_tanaman);
echo "<br />Jumlah buah yang akan dipanen adalah $jumlah_buah";

$skor_ujian = [85, 92, 78, 96, 88];
$total_skor = 0;

foreach ($skor_ujian as $skor) $total_skor += $skor;
echo "<br />Total skor ujian adalah $total_skor";

$nilai_siswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilai_siswa as $nilai)
echo ($nilai < 60) ? "<br />Nilai $nilai tidak lulus." : "<br />Nilai $nilai lulus.";

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai_siswa);
$nilai_yang_dipilih = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilai_yang_dipilih);
echo "<br />Total nilai setelah mengabaikan dua nilai tertinggi dan terendah adalah $total_nilai.";

$harga_produk = 120000;
$diskon = 0;

if ($harga_produk > 100000) $diskon = 0.2 * $harga_produk;
$harga_setelah_diskon = $harga_produk - $diskon;

echo "<br />Harga produk: Rp $harga_produk";
echo "<br />Diskon: Rp $diskon";
echo "<br />Harga yang harus dibayar setelah diskon: Rp $harga_setelah_diskon";

$total_poin = 520;
echo "<br />Total skor pemain adalah $total_poin";
$hadiah = ($total_poin > 500) ? "YA." : "TIDAK.";
echo "<br />Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>