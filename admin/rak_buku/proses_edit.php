<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_rak_buku'];
	$ID = $_POST['id_rak_buku'];

	$sql1 = "UPDATE rak_buku SET nama_rak_buku = '$nama', id_rak_buku = '$ID' WHERE id_rak_buku='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>