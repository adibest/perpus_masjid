<?php
session_start();
if (isset($_SESSION['email_petugas'])) {
	include '../../config/koneksi.php';
	$id = $_POST['id'];
	$judul = $_POST['judul_majalah'];
	$rak = $_POST['id_rak_majalah'];
	$kat = $_POST['id_kategori_majalah'];
	$pbt = $_POST['id_penerbit'];
	$btr = $_POST['bulan_terbit'];
	$ttr = $_POST['tahun_terbit'];
	$ktr = $_POST['keterangan_majalah'];
	$sts = $_POST['status_majalah'];
	$byk = $_POST['banyak_majalah'];

	$sql1 = "UPDATE majalah SET judul_majalah = '$judul', id_rak_majalah = '$rak', id_kategori_majalah = '$kat', id_penerbit = '$pbt', bulan_terbit = '$btr', tahun_terbit = '$ttr', keterangan_majalah = '$ktr', status_majalah = '$sts', banyak_majalah = '$byk' WHERE issn='$id' ";
	mysqli_query($connect,$sql1);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>