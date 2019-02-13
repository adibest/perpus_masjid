<html>
	<head>
		<title>Data Penerbit</title>
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
				<td>Id Penerbit</td>
				<td>Nama</td>
				<td>No Telepon</td>
				<td>Email</td>
				<td>Alamat</td>
				<td>Kota</td>
				<td>Tentang Penerbit</td>
				<td>Action</td>
			</tr>
			<?php
			include '../../config/koneksi.php';
			$nomor  = 1;
			$sql    = "SELECT * FROM penerbit";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['id_penerbit']."</td>
						<td>".$row['nama_penerbit']."</td>
						<td>".$row['no_telp_penerbit']."</td>
						<td>".$row['email_penerbit']."</td>
						<td>".$row['alamat_penerbit']."</td>
						<td>".$row['kota_penerbit']."</td>
						<td>".$row['tentang_penerbit']."</td>
						<td>
							<a href='edit.php?no=".$row['id_penerbit']."'>Edit</a>
							<a href='delete.php?no=".$row['id_penerbit']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>