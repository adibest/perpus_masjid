<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_anggota'];
	$telp = $_POST['no_telp_anggota'];
	$email = $_POST['email_anggota'];
	$alamat = $_POST['alamat_anggota'];
	$kota = $_POST['kota_anggota'];

	$sql1 = "UPDATE anggota SET nama_anggota = '$nama', no_telp_anggota = '$telp', email_anggota = '$email', alamat_anggota = '$alamat', kota_anggota = '$kota' WHERE no_identitas='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>