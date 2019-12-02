<?php 
include 'create_table.php';
$ID = $_GET['id'];

$sql = "DELETE FROM matapelajaran WHERE id = '$ID'";

mysqli_query($connect, $sql);
header('location:index.php');