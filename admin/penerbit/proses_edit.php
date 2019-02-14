<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama_penerbit'];
	$telp = $_POST['no_telp_penerbit'];
	$email = $_POST['email_penerbit'];
	$tentang = $_POST['tentang_penerbit'];
	$alamat = $_POST['alamat_penerbit'];
	$kota = $_POST['kota_penerbit'];

	$sql1 = "UPDATE penerbit SET nama_penerbit = '$nama', no_telp_penerbit = '$telp', email_penerbit = '$email', tentang_penerbit = '$tentang', alamat_penerbit = '$alamat', kota_penerbit = '$kota' WHERE id_penerbit='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>