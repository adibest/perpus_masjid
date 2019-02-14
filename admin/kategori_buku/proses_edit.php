<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_kategori_buku'];
	$ID = $_POST['id_kategori_buku'];

	$sql1 = "UPDATE kategori_buku SET nama_kategori_buku = '$nama', id_kategori_buku = '$ID' WHERE id_kategori_buku='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>