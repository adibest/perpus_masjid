<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['id_anggota'];
	$isbn = $_POST['isbn'];
	$tpb = $_POST['tgl_pinjam_buku'];
	$tkb = $_POST['tgl_kembali_buku'];
	$spb = $_POST['status_pinjam_buku'];
	$ptgs = $_POST['id_petugas'];

	$sql1 = "INSERT INTO pinjam_buku (id_anggota,isbn,tgl_pinjam_buku,tgl_kembali_buku,status_pinjam_buku,id_petugas) VALUES ('$nama','$isbn','$tpb','$tkb','$spb','$ptgs')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>