<?php
include 'create_table.php';
$mapel = $_POST['mapel'];

$sql = "INSERT INTO matapelajaran (mapel) values ('$mapel')";
mysqli_query($connect,$sql);
header('location:index.php');