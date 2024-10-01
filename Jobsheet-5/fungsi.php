<?php
function hitung_umur($tahun_lahir, $tahun_sekarang)
{
	$umur = $tahun_sekarang - $tahun_lahir;
	return $umur;
}

function Perkenalan($nama, $salam = "Assalamu'alaikum")
{
	echo $salam . ", ";
	echo "perkenalkan, nama saya " . $nama . "<br />";
	echo "Saya berusia " . hitung_umur(1988, 2023) . " tahun. <br />";
	echo "Senang berkenalan dengan Anda!<br />";
}

Perkenalan("Elok");