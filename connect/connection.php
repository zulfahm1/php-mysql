<?php
$serve = "localhost";
$user = "root";
$pass = "lillah";
$data = "santri_usman";

$connect= mysqli_connect($serve,$user,$pass,$data);

if (!$connect) {
	die("Koneksi gagal => " . mysqli_connect_error());
}

