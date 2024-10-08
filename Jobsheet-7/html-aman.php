<!DOCTYPE html>
<html>
<head>
	<title>Input Aman</title>
</head>
<body>
	<h2>Form Input Aman PHP</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="input">Masukkan teks:</label>
		<input type="text" name="input" id="input" required />
		<br /><br />
		
		<label for="email">Masukkan email:</label>
		<input type="email" name="email" id="email" required />
		<br /><br />

		<input type="submit" name="submit" value="Submit" />
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$input = $_POST["input"];
		$input = htmlspecialchars($input, ENT_QUOTES, "UTF-8");
		echo "Input yang aman: " . $input . "<br />";

		$email = $_POST["email"];
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, "UTF-8");
		} else {
			echo "Email tidak valid!";
		}
	}
	?>
</body>
</html>