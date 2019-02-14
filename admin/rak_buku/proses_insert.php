<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id_rak_buku'];
	$nama = $_POST['nama_rak_buku'];

	$sql1 = "INSERT INTO rak_buku (id_rak_buku,nama_rak_buku) VALUES ('$id','$nama')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>