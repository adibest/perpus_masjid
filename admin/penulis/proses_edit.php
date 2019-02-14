<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_penulis'];
	$email = $_POST['email_penulis'];
	$ttg = $_POST['tentang_penulis'];
	$alamat = $_POST['alamat_penulis'];
	$kota = $_POST['kota_penulis'];

	$sql1 = "UPDATE penulis SET nama_penulis = '$nama', email_penulis = '$email', tentang_penulis = '$ttg', alamat_penulis = '$alamat', kota_penulis = '$kota' WHERE id_penulis='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>