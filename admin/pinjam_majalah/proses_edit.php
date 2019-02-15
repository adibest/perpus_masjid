<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['id_anggota'];
	$issn = $_POST['issn'];
	$tpb = $_POST['tgl_pinjam_majalah'];
	$tkb = $_POST['tgl_kembali_majalah'];
	$spb = $_POST['status_pinjam_majalah'];
	$ptgs = $_POST['id_petugas'];

	$sql1 = "UPDATE pinjam_majalah SET id_anggota = '$nama', issn = '$issn', tgl_pinjam_majalah = '$tpb', tgl_kembali_majalah = '$tkb', status_pinjam_majalah = '$spb', id_petugas = '$ptgs' WHERE id_pinjam_majalah='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>