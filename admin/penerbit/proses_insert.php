<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['nama_penerbit'];
	$telp = $_POST['no_telp_penerbit'];
	$email = $_POST['email_penerbit'];
	$ttg = $_POST['tentang_penerbit'];
	$alamat = $_POST['alamat_penerbit'];
	$kota = $_POST['kota_penerbit'];

	$sql1 = "INSERT INTO penerbit (nama_penerbit,no_telp_penerbit,email_penerbit,tentang_penerbit,alamat_penerbit,kota_penerbit) VALUES ('$nama','$telp','$email','$ttg','$alamat','$kota')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>