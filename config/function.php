<?php
include 'koneksi.php';

function id_anggota($id_anggota)
{
	global $connect;
	$sql 	= "SELECT * FROM kartu_anggota WHERE id_anggota=".$id_anggota;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_anggota'];
}

function identitas($id)
{
	global $connect;
	$sql 	= "SELECT nama_anggota FROM anggota WHERE no_identitas=".$id;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_anggota'];
}

function penulis($id_penulis)
{
	global $connect;
	$sql 	= "SELECT * FROM penulis WHERE id_penulis=".$id_penulis;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_penulis'];
}

function rak_buku($id_rak_buku)
{
	global $connect;
	$sql 	= "SELECT * FROM rak_buku WHERE id_rak_buku=".$id_rak_buku;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_rak_buku'];
}

function rak_majalah($id_rak_majalah)
{
	global $connect;
	$sql 	= "SELECT * FROM rak_majalah WHERE id_rak_majalah=".$id_rak_majalah;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_rak_majalah'];
}

function kategori_buku($id_kategori_buku)
{
	global $connect;
	$sql 	= "SELECT * FROM kategori_buku WHERE id_kategori_buku=".$id_kategori_buku;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_kategori_buku'];
}

function kategori_majalah($id_kategori_majalah)
{
	global $connect;
	$sql 	= "SELECT * FROM kategori_majalah WHERE id_kategori_majalah=".$id_kategori_majalah;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_kategori_majalah'];
}

function penerbit($id_penerbit)
{
	global $connect;
	$sql 	= "SELECT * FROM penerbit WHERE id_penerbit=".$id_penerbit;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_penerbit'];
}

function petugas($id_petugas)
{
	global $connect;
	$sql 	= "SELECT * FROM petugas WHERE id_petugas=".$id_petugas;
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_assoc($result);
	return $row['nama_petugas'];
}

function isbn($isbn)
{
	global $connect;
	$sql	= "SELECT * FROM buku WHERE isbn =".$isbn;
	$result	= mysqli_query($connect, $sql);
	$row	= mysqli_fetch_assoc($result);
	return $row['judul_buku'];
}

function issn($issn)
{
	global $connect;
	$sql	= "SELECT * FROM majalah WHERE issn =".$issn;
	$result	= mysqli_query($connect, $sql);
	$row	= mysqli_fetch_assoc($result);
	return $row['judul_majalah'];
}

function status_buku($status_buku)
{
	global $connect;
	$sql	= "SELECT * FROM buku WHERE status_buku =".$status_buku;
	$result	= mysqli_query($connect, $sql);
	$row	= mysqli_fetch_assoc($result);
	if ($row['status_buku']==1) {
		echo "Tersedia";
	} else {
		echo "Tidak Tersedia";
	}
}

function status_pinjam_buku($s_p_buku)
{
	global $connect;
	$sql	= "SELECT * FROM pinjam_buku WHERE status_pinjam_buku =".$s_p_buku;
	$result	= mysqli_query($connect, $sql);
	$row	= mysqli_fetch_assoc($result);
	if ($row['status_pinjam_buku']==1) {
		echo "Dikembalikan";
	} else {
		echo "Belum Kembali/Dipinjam";
	}
}
?>