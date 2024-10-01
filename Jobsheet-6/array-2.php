<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Array 2</title>
	<style>
		table {
			width: 50%;
			margin: 20px auto;
			border-collapse: collapse;
			border: 1px solid #ddd;
			font-family: Arial, sans-serif;
		}

		th,
		td {
			padding: 12px;
			text-align: left;
			border: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
		}

		tr:nth-child(even) {
			background-color: #f9f9f9;
		}
	</style>
</head>

<body>
	<?php
	$dosen = [
		'nama' => 'Elok Nur Hamdana',
		'domisili' => 'Malang',
		'jenis_kelamin' => 'Perempuan'
	];
	?>

	<table>
		<tr>
			<th>Informasi</th>
			<th>Detail</th>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $dosen['nama']; ?></td>
		</tr>
		<tr>
			<td>Domisili</td>
			<td><?php echo $dosen['domisili']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $dosen['jenis_kelamin']; ?></td>
		</tr>
	</table>
</body>

</html>
