<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$issn = $_POST['issn'];
	$judul = $_POST['judul_majalah'];
	$rak = $_POST['id_rak_majalah'];
	$kat = $_POST['id_kategori_majalah'];
	$pbt = $_POST['id_penerbit'];
	$btr = $_POST['bulan_terbit'];
	$ttr = $_POST['tahun_terbit'];
	$ktr = $_POST['keterangan_majalah'];
	$sts = $_POST['status_majalah'];
	$byk = $_POST['banyak_majalah'];

	$sql1 = "INSERT INTO majalah (issn,judul_majalah,id_rak_majalah,id_kategori_majalah,id_penerbit,bulan_terbit,tahun_terbit,keterangan_majalah,status_majalah,banyak_majalah) VALUES ('$issn','$judul','$rak','$kat','$pbt','$btr','$ttr','$ktr','$sts','$byk')";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>