<html>
	<head>
		<title>Data Anggota</title>
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
		<a href="tambah.php">Tambah Data</a>
		<table>
			<tr>
				<td>No</td>
				<td>No Identittas</td>
				<td>Nama</td>
				<td>No Telepon</td>
				<td>Email</td>
				<td>Alamat</td>
				<td>Kota</td>
				<td>Action</td>
			</tr>
			<?php
			include '../config/koneksi.php';
			$nomor  = 1;
			$sql    = "SELECT * FROM anggota";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['no_identitas']."</td>
						<td>".$row['nama_anggota']."</td>
						<td>".$row['no_telp_anggota']."</td>
						<td>".$row['email_anggota']."</td>
						<td>".$row['alamat_anggota']."</td>
						<td>".$row['kota_anggota']."</td>
						<td>
							<a href='edit.php?no=".$row['no_identitas']."'>Edit</a>
							<a href='delete.php?no=".$row['no_identitas']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>