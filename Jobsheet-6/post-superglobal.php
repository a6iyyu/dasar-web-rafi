<!doctype html>
<html>
	<head>
		<title>Post Superglobal</title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			Name: <input type="text" name="fname" />
			<input type="submit" />
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = $_REQUEST["fname"];
				echo empty($name) ? "Name is empty." : $name;
			}
		?>
	</body>
</html>
