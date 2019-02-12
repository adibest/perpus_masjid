<?php
include 'koneksi.php';
function penulis($id)
{
	global $connect;
	$sql = "SELECT * FROM user WHERE id = '$id'";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result)
	return $row['name'];
}

function kategori($id)
{
	global $connect;
	$sql = "SELECT * FROM kategori WHERE id = '$id'";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result)
	return $row['nama'];
}
?>