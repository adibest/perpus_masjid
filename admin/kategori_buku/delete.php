<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM kategori_buku WHERE id_kategori_buku = '$id'";
mysqli_query($connect,$sql4);
header('location:index.php');
?>