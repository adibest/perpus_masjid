<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM penulis WHERE id_penulis = '$id'";
mysqli_query($connect,$sql4);
header('location:index.php');
?>