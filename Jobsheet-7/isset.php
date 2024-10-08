<?php
$umur;
echo (isset($umur) && umur >= 10) ? "Anda sudah dewasa." : "Anda belum dewasa atau variabel 'umur' tidak ditemukan!";

echo "<br />";

$data = array("nama" => "Jane", "usia" => 25);
echo (isset($data["nama"])) ? "Nama: " . $data["nama"] : "Variabel 'nama' tidak ditemukan di dalam array!";
?>
