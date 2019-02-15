<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM buku WHERE isbn = '$id'";
mysqli_query($connect,$sql4);
header('location:index.php');
?>