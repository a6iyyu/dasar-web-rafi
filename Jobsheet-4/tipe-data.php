<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a adalah {$a} <br />";
echo "Variabel b adalah {$b} <br />";
echo "Variabel c adalah {$c} <br />";
echo "Variabel d adalah {$d} <br />";
echo "Variabel e adalah {$e} <br />";

var_dump($e);

$nilai_matematika = 5.1;
$nilai_ipa = 6.7;
$nilai_bahasa_indonesia = 9.3;

$rata_rata = ($nilai_matematika + $nilai_ipa + $nilai_bahasa_indonesia) / 3;
echo "<br />Matematika: {$nilai_matematika} <br />";
echo "IPA: {$nilai_ipa} <br />";
echo "Bahasa Indonesia: {$nilai_bahasa_indonesia} <br />";
echo "Rata-rata: {$rata_rata} <br />";

var_dump($rata_rata);

$apakah_siswa_lulus = true;
$apakah_siswa_sudah_ujian = false;

echo "<br />";
var_dump($apakah_siswa_lulus);
echo "<br />";
var_dump($apakah_siswa_sudah_ujian);

$nama_depan = "Ibnu";
$nama_belakang = 'Jakaria';

$nama_lengkap = "{$nama_depan} {$nama_belakang}";
$nama_lengkap_2 = $nama_depan . ' ' . $nama_belakang;

echo "<br />Nama depan adalah {$nama_depan} <br />";
echo "Nama belakang adalah {$nama_belakang} <br />";

echo $nama_lengkap;

$list_mahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo "<br />" . $list_mahasiswa[0];
?>