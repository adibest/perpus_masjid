<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['id_anggota'];
	$isbn = $_POST['issn'];
	$tpb = $_POST['tgl_pinjam_majalah'];
	$tkb = $_POST['tgl_kembali_majalah'];
	$spb = $_POST['status_pinjam_majalah'];
	$ptgs = $_POST['id_petugas'];

	$sql1 = "INSERT INTO pinjam_majalah (id_anggota,issn,tgl_pinjam_majalah,tgl_kembali_majalah,status_pinjam_majalah,id_petugas) VALUES ('$nama','$isbn','$tpb','$tkb','$spb','$ptgs')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>