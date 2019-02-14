<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_petugas'];
	$telp = $_POST['no_telp_petugas'];
	$email = $_POST['email_petugas'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat_petugas'];
	$kota = $_POST['kota_petugas'];

	$sql1 = "UPDATE petugas SET nama_petugas = '$nama', no_telp_petugas = '$telp', email_petugas = '$email', password = '$pass', alamat_petugas = '$alamat', kota_petugas = '$kota' WHERE id_petugas='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>