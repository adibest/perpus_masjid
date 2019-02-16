<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$noid = $_POST['no_identitas'];
	$nama = $_POST['nama_anggota'];
	$telp = $_POST['no_telp_anggota'];
	$email = $_POST['email_anggota'];
	$alamat = $_POST['alamat_anggota'];
	$kota = $_POST['kota_anggota'];
	$daftar = date('Y-m-d');

	$sql1 = "UPDATE anggota SET nama_anggota = '$nama', no_telp_anggota = '$telp', email_anggota = '$email', alamat_anggota = '$alamat', kota_anggota = '$kota' WHERE no_identitas='$id' ";
	mysqli_query($connect,$sql1);

	$sql_ambil = "SELECT id_anggota FROM kartu_anggota WHERE no_identitas='$noid' ";
	$result = mysqli_query($connect,$sql_ambil);
	$row    = mysqli_fetch_assoc($result);
	$ida 	= $row['id_anggota'];

	$sql2 = "UPDATE kartu_anggota SET no_identitas = '$noid' WHERE id_anggota ='$ida' ";
	mysqli_query($connect,$sql2);

	$sql3 = "UPDATE pendaftaran SET no_identitas = '$noid', id_anggota = '$ida', tgl_pendaftaran = '$daftar' ";
	mysqli_query($connect,$sql3);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>