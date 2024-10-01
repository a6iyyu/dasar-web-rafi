<?php
function hitung_umur($tahun_lahir, $tahun_sekarang) {
	$umur = $tahun_sekarang - $tahun_lahir;
	return $umur;
}

echo "Umur saya adalah " . hitung_umur(1988, 2023) . " tahun.";
?>
