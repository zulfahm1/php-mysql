<?php
include 'create_table.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$born = $_POST['born'];

$sql = "INSERT INTO santri (name, email, password, born) values ('$name','$email','$password','$born')";
mysqli_query($connect,$sql);
header('location:index.php');

