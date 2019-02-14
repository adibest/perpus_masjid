<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$noid = $_POST['no_identitas'];
	$nama = $_POST['nama_anggota'];
	$telp = $_POST['no_telp_anggota'];
	$email = $_POST['email_anggota'];
	$alamat = $_POST['alamat_anggota'];
	$kota = $_POST['kota_anggota'];
	$daftar = date('Y-m-d');
	$null = null;

	$sql1 = "INSERT INTO anggota (no_identitas,nama_anggota,no_telp_anggota,email_anggota,alamat_anggota,kota_anggota) VALUES ('$noid','$nama','$telp','$email','$alamat','$kota')";
	$sql2 = "INSERT INTO kartu_anggota (id_anggota,no_identitas) VALUES ('$null','$noid')";
	$sql3 = "INSERT INTO pendaftaran (no_identitas,id_anggota,tgl_pendaftaran) VALUES ('$noid','$null',$daftar')";
	mysqli_query($connect,$sql1);
	mysqli_query($connect,$sql2);
	mysqli_query($connect,$sql3);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>