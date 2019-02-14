<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id_kategori_majalah'];
	$nama = $_POST['nama_kategori_majalah'];

	$sql1 = "INSERT INTO kategori_majalah (id_kategori_majalah,nama_kategori_majalah) VALUES ('$id','$nama')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>