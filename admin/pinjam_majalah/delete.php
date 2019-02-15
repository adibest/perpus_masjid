<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM pinjam_majalah WHERE id_pinjam_majalah = '$id'";
mysqli_query($connect,$sql4);
header('location:index.php');
?>