<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['nama_petugas'];
	$telp = $_POST['no_telp_petugas'];
	$email = $_POST['email_petugas'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat_petugas'];
	$kota = $_POST['kota_petugas'];

	$sql1 = "INSERT INTO petugas (nama_petugas,no_telp_petugas,email_petugas,password,alamat_petugas,kota_petugas) VALUES ('$nama','$telp','$email','$pass','$alamat','$kota')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>