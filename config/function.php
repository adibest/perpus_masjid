<?php
include 'koneksi.php';

function id_anggota($id)
{
	global $connect;
	$sql 	= "SELECT id_anggota FROM kartu_peserta WHERE id_anggota=".$id;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['id_anggota'];
}

function identitas($id)
{
	global $connect;
	$sql 	= "SELECT nama_anggota FROM anggota WHERE no_identitas=".$id;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_anggota'];
}
?>