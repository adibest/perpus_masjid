<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id_rak_majalah'];
	$nama = $_POST['nama_rak_majalah'];

	$sql1 = "INSERT INTO rak_majalah (id_rak_majalah,nama_rak_majalah) VALUES ('$id','$nama')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>