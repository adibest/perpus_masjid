<html>
	<head>
		<title>Data Penulis</title>
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
				<td>Id Penulis</td>
				<td>Nama</td>
				<td>Email</td>
				<td>Alamat</td>
				<td>Kota</td>
				<td>Tentang Penulis</td>
				<td>Action</td>
			</tr>
			<?php
			include '../config/koneksi.php';
			$nomor  = 1;
			$sql    = "SELECT * FROM penulis";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['id_penulis']."</td>
						<td>".$row['nama_penulis']."</td>
						<td>".$row['email_penulis']."</td>
						<td>".$row['alamat_penulis']."</td>
						<td>".$row['kota_penulis']."</td>
						<td>".$row['tentang_penulis']."</td>
						<td>
							<a href='edit.php?no=".$row['id_penulis']."'>Edit</a>
							<a href='delete.php?no=".$row['id_penulis']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>