<?php
include '../connect/connection.php';

$sql = "CREATE TABLE mapel_santri (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	santri_id INT,
	mapel_id INT,
	nilai_num INT NOT NULL,
	nilai_alpha VARCHAR(3)
)";
mysqli_query($connect, $sql);
