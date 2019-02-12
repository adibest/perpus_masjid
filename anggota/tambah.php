<html>
	<head>
		<title>Tambah Anggota</title>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<style type="text/css">
		body {
			font-family: 'Source Sans Pro', sans-serif;
		}
		table {
			border: 1px solid black;
			border-collapse: collapse;
		}
		tr,td {
			border: 1px solid black;
			padding: 5px;
		}
		</style>
	</head>
	<body>
		<h3>Tambah Anggota</h3>
		<form action="proses_tambah.php" method="POST">
			<table>
				<tr>
					<td>No Identitas</td>
					<td><input type="text" name="no_identitas"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="no_telp"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Kota</td>
					<td><input type="text" name="kota"></td>
				</tr>
				<tr>
					<td>
						<a href="index.php">Batal</a>
					</td>
					<td>
				      	<button type="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>