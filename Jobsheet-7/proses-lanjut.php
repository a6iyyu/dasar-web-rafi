<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$selected_buah = $_POST["buah"];
	$selected_warna = (isset($_POST["warna"])) ? $_POST["warna"] : [];
	$selected_jenis_kelamin = $_POST["jenis_kelamin"];
	echo "Anda memilih buah " . $selected_buah . "<br />";
	echo (!empty($selected_warna)) ? "Warna favorit Anda: " . implode(", ", $selected_warna) . "<br />" : "Anda tidak memilih warna favorit. <br />";
	echo "Jenis kelamin Anda adalah " . $selected_jenis_kelamin;
}
?>
