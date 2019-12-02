<?php
include 'create_table.php';
$ID = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$born = $_POST['born'];

$sql = "UPDATE santri SET name = '$name', email = '$email', password = '$password', born = '$born' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
