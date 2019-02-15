<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$issn = $_POST['isbn'];
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

	$sql1 = "INSERT INTO buku (isbn,judul_buku,id_rak_buku,id_kategori_buku,id_penerbit,id_penulis,tahun_terbit,keterangan_buku,status_buku,banyak_buku,tempat_terbit) VALUES ('$issn','$judul','$rak','$kat','$pbt','$pen','$ttr','$ktr','$sts','$byk','$tmr')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>