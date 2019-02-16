<?php
session_start();
include 'koneksi.php';
$email		= $_POST['email_petugas'];
$pass		= $_POST['password'];
if(!empty($email) && !empty($pass)) {
	$sql		= "SELECT * FROM petugas WHERE email_petugas = '$email' AND password = '$pass'";
	$query		= mysqli_query($connect, $sql);
	$row 		= mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id_petugas']		= $row['id_petugas'];
		$_SESSION['email_petugas']	= $email;
		$_SESSION['nama_petugas']	= $row['nama_petugas'];
		// $_SESSION['photo']	= "../gambar_user/".$row['foto'];
		
		header('location: ../admin/index.php');
	} else {
		echo "Email anda salah";
	}
} else {
	echo "Email dan password anda kosong";
}
?>