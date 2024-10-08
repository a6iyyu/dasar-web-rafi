<!DOCTYPE html>
<html>
<head>
	<title>Form Input PHP</title>
</head>
<body>
	<h2>Form Input PHP</h2>
	<?php
	$nama_error = "";
	$nama = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nama"])) {
			$nama_error = "Nama harus diisi!";
		} else {
			$nama = $_POST["nama"];
			echo "Data berhasil disimpan.";
		}
	}
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" />
		<span class="error"><?php echo $nama_error; ?></span>
		<br /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>
