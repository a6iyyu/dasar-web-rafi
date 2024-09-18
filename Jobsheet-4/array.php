<?php
$nilai_siswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilai_lulus = [];

foreach ($nilai_siswa as $nilai) if ($nilai >= 70) $nilai_lulus[] = $nilai;
echo "Daftar nilai siswa yang lulus adalah " . implode(", ", $nilai_lulus) . "<br />";

$daftar_karyawan = [
  ["Alice", 7],
  ["Bob", 3],
  ["Charlie", 9],
  ["David", 5],
  ["Eva", 6],
];

$karyawan_pengalaman_lima_tahun = [];

foreach ($daftar_karyawan as $karyawan) if ($karyawan[1] > 5) $karyawan_pengalaman_lima_tahun[] = $karyawan[0];
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun adalah " . implode(", ", $karyawan_pengalaman_lima_tahun);

$daftar_nilai = [
	"Matematika" => [
		["Alice", 85],
		["Bob", 92],
		["Charlie", 78],
	],
	"Fisika" => [
		["Alice", 90],
		["Bob", 88],
		["Charlie", 75],
	],
	"Kimia" => [
		["Alice", 92],
		["Bob", 80],
		["Charlie", 85],
	],
];

$mata_kuliah = "Fisika";

echo "<br />Daftar nilai mahasiswa dalam mata kuliah $mata_kuliah adalah <br />";
foreach ($daftar_nilai[$mata_kuliah] as $nilai) echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br />";

$daftar_nilai = [
	["Alice", 85],
	["Bob", 92],
	["Charlie", 78],
	["David", 64],
	["Eva", 90],
];

$total_nilai = 0;
$jumlah_siswa = count($daftar_nilai);

foreach ($daftar_nilai as $nilai) $total_nilai += $nilai[1];

$rata_rata = $total_nilai / $jumlah_siswa;

echo "<br />Daftar siswa dengan nilai di atas rata-rata ($rata_rata) adalah:<br />";

foreach ($daftar_nilai as $nilai)	if ($nilai[1] > $rata_rata)	echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br />";
?>