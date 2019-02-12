<?php
include '../config/koneksi.php';
$no_id		= $_POST['no_identitas'];
$nama 		= $_POST['nama'];
$no_telp    = $_POST['no_telp'];
$email 		= $_POST['email'];
$alamat     = $_POST['alamat'];
$kota    	= $_POST['kota'];

$sql = "INSERT INTO anggota (no_identitas, nama_anggota, no_telp_anggota, email_anggota, alamat_anggota, kota_anggota) VALUES ('$no_id','$nama','$cno_telp','$email','$alamat','$kota')";
mysqli_query($connect,$sql);

header('location:index.php');
?>