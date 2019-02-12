<?php
include '../config/koneksi.php';
$NO    = $_GET['no'];

$sql = "DELETE FROM anggota WHERE no_identitas = '$NO'";
mysqli_query($connect,$sql);
header('location:index.php');
?>