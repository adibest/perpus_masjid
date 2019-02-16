<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM anggota WHERE no_identitas = '$id'";
mysqli_query($connect,$sql4);
$sql5 = "DELETE FROM "
header('location:index.php');
?>