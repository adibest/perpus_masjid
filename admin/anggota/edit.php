<html>
	<head>
		<title>Data News</title>
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
		<h3>Edit News</h3>
		<form action="proses_edit.php" method="POST">
			<?php
			include '../../config/koneksi.php';
			$NO     = $_GET['no'];
			$sql    = "SELECT * FROM anggota WHERE no_identitas=$NO";
			$result = mysqli_query($connect,$sql);
			$row    = mysqli_fetch_assoc($result);
			?>
			<input type="hidden" name="no" value="<?php echo $NO; ?>">
			<table>
				<tr>
					<td>No Identitas</td>
					<td><input type="text" name="no_identitas" value="<?= $row['no_identitas']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?= $row['nama_anggota']?>"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="no_telp" value="<?= $row['no_telp_anggota']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?= $row['email_anggota']?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?= $row['alamat_anggota']?>"></td>
				</tr>
				<tr>
					<td>Kota</td>
					<td><input type="text" name="kota" value="<?= $row['kota_anggota']?>"></td>
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