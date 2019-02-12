<?php
$servername = "localhost"; //nama server
$username   = "root"; // username dari mysql yang ada di phpmyadmin
$password   = "123"; // password dari mysql yang ada di phpmyadmin
$dbname     = "perpus_masjid"; // nama database yang sudah dibuat

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>