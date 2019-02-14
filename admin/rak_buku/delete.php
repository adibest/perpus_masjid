<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM rak_buku WHERE id_rak_buku = '$id'";
mysqli_query($connect,$sql4);
header('location:index.php');
?>