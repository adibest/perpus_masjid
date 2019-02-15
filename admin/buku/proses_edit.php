<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$judul = $_POST['judul_buku'];
	$rak = $_POST['id_rak_buku'];
	$kat = $_POST['id_kategori_buku'];
	$pbt = $_POST['id_penerbit'];
	$pen = $_POST['id_penulis'];
	$tmr = $_POST['tempat_terbit'];
	$ttr = $_POST['tahun_terbit'];
	$ktr = $_POST['keterangan_buku'];
	$sts = $_POST['status_buku'];
	$byk = $_POST['banyak_buku'];

	$sql1 = "UPDATE buku SET judul_buku = '$judul', id_rak_buku = '$rak', id_kategori_buku = '$kat', id_penerbit = '$pbt', id_penulis = '$pen', tahun_terbit = '$ttr', keterangan_buku = '$ktr', status_buku = '$sts', banyak_buku = '$byk', tempat_terbit = '$tmr' WHERE isbn='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>