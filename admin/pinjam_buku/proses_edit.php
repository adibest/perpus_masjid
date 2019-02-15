<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['id_anggota'];
	$isbn = $_POST['isbn'];
	$tpb = $_POST['tgl_pinjam_buku'];
	$tkb = $_POST['tgl_kembali_buku'];
	$spb = $_POST['status_pinjam_buku'];
	$ptgs = $_POST['id_petugas'];

	$sql1 = "UPDATE pinjam_buku SET id_anggota = '$nama', isbn = '$isbn', tgl_pinjam_buku = '$tpb', tgl_kembali_buku = '$tkb', status_pinjam_buku = '$spb', id_petugas = '$ptgs' WHERE id_pinjam_buku='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>