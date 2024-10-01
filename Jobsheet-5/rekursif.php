<?php
function tampilkan_angka(int $jumlah, int $indeks = 1)
{
	echo "Perulangan ke-{$indeks}. <br />";
	if ($indeks <= $jumlah) tampilkan_angka($jumlah, $indeks + 1);
}

tampilkan_angka(20);