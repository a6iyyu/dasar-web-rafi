<?php
echo (preg_match("/[a-z]/", "This is a Sample Text.")) ? "Huruf kecil ditemukan!" : "Tidak ada huruf kecil!";
echo "<br />";
echo (preg_match("/[0-9]+/", "There are 123 apples.", $matches)) ? "Cocokkan: " . $matches[0] : "Tidak ada yang cocok!";
echo "<br />";
echo preg_replace("/apple/", "banana", "I like apple pie.");
echo "<br />";
echo (preg_match("/go{1,2}d/", "god is good.", $matches)) ? "Cocokkan:" . $matches[0] : "Tidak ada yang cocok!";
?>
