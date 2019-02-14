<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_kategori_majalah'];
	$ID = $_POST['id_kategori_majalah'];

	$sql1 = "UPDATE kategori_majalah SET nama_kategori_majalah = '$nama', id_kategori_majalah = '$ID' WHERE id_kategori_majalah='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>