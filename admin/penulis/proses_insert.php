<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['nama_penulis'];
	$email = $_POST['email_penulis'];
	$ttg = $_POST['tentang_penulis'];
	$alamat = $_POST['alamat_penulis'];
	$kota = $_POST['kota_penulis'];

	$sql1 = "INSERT INTO penulis (nama_penulis,email_penulis,tentang_penulis,alamat_penulis,kota_penulis) VALUES ('$nama','$email','$ttg','$alamat','$kota')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>