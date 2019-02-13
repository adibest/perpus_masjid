<html>
	<head>
		<title>Data Kategori Majalah</title>
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
				<td>Id Kategori Majalah</td>
				<td>Nama Kategori</td>
			</tr>
			<?php
			include '../../config/koneksi.php';
			$nomor  = 1;
			$sql    = "SELECT * FROM kategori_majalah";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['id_kategori_majalah']."</td>
						<td>".$row['nama_kategori_majalah']."</td>
						<td>
							<a href='edit.php?no=".$row['id_kategori_majalah']."'>Edit</a>
							<a href='delete.php?no=".$row['id_kategori_majalah']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>