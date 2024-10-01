<?php
$pesan = "Saya arek Malang.";
$pesan_per_kata = explode(" ", $pesan);
$pesan_per_kata = array_map(fn($pesan) => strrev($pesan), $pesan_per_kata);
$pesan = implode(" ", $pesan_per_kata);
echo $pesan . "<br />";
?>
