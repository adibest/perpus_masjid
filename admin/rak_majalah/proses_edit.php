<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_rak_majalah'];
	$ID = $_POST['id_rak_majalah'];

	$sql1 = "UPDATE rak_majalah SET nama_rak_majalah = '$nama', id_rak_majalah = '$ID' WHERE id_rak_majalah='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>