<?php
include 'create_table.php';
$ID = $_GET['id'];

$del = "DELETE FROM mapel_santri WHERE id = '$ID'";
mysqli_query($connect, $del);
header('location:index.php');

?>
