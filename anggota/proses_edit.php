<?php
include '../config/koneksi.php';
$NO         = $_POST['no'];
$no_id 		= $_POST['no_identitas'];
$nama 		= $_POST['nama'];
$no_telp    = $_POST['no_telp'];
$email 		= $_POST['email'];
$alamat     = $_POST['alamat'];
$kota    	= $_POST['kota'];

$sql = "UPDATE anggota SET no_identitas = '$no_id', nama_anggota = '$nama', no_telp_anggota = '$no_telp', email_anggota = '$email', alamat_anggota = '$alamat', kota_anggota = '$kota' WHERE no_identitas = '$NO'";
mysqli_query($connect,$sql);

header('location:index.php');
?>