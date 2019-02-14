<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id_kategori_buku'];
	$nama = $_POST['nama_kategori_buku'];

	$sql1 = "INSERT INTO kategori_buku (id_kategori_buku,nama_kategori_buku) VALUES ('$id','$nama')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>