<html>
	<head>
		<title>Data Buku</title>
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
				<td>ISBN</td>
				<td>Judul</td>
				<td>Penulis</td>
				<td>Rak</td>
				<td>Kategori</td>
				<td>Penerbit</td>
				<td>Tempat Terbit</td>
				<td>Tahun Terbit</td>
				<td>Keterangan Buku</td>
				<td>Status</td>
				<td>Banyak Buku</td>
				<td>Action</td>
			</tr>
			<?php
			include '../../config/koneksi.php';
			$nomor  = 1;
			$sql    = "SELECT * FROM buku";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['isbn']."</td>
						<td>".$row['judul_buku']."</td>
						<td>".$row['id_penulis']."</td>
						<td>".$row['id_rak_buku']."</td>
						<td>".$row['id_kategori_buku']."</td>
						<td>".$row['id_penerbit']."</td>
						<td>".$row['tempat_terbit']."</td>
						<td>".$row['tahun_terbit']."</td>
						<td>".$row['keterangan_buku']."</td>
						<td>".$row['status_buku']."</td>
						<td>".$row['banyak_buku']."</td>
						<td>
							<a href='edit.php?no=".$row['isbn']."'>Edit</a>
							<a href='delete.php?no=".$row['isbn']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>