<?php
include 'create_table.php';

$santri_id = $_POST['sans'];
$mapel_id = $_POST['mapel_id'];
$nilai_num = $_POST['nilai_num'];

if ($nilai_num >= 0 && $nilai_num<=100) {
	$nilai_alpha='A';
}
else {$nilai_alpha = 'X';}
$sql = "INSERT INTO mapel_santri (santri_id,mapel_id,nilai_num,nilai_alpha) VALUES ('$santri_id','$mapel_id','$nilai_num','$nilai_alpha')";
$result = mysqli_query($connect,$sql);
header('location:index.php'); 
