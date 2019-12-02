<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="png/jpg" href="https://www.cairnskangarooms.com/wp-content/uploads/2018/07/Fill-in-Form-Icon.png">
	<title>Form Santri | MAPEL SANTRI</title>
</head>
<body>
	<?php include '../layout/menu.php';?>
	<form>
		<p class="add"><a href="add.php"><img src="http://www.backupassist.fr/wp-content/uploads/2017/01/plus-icon-13066.png"></a></p>
		<table class="tabeel">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Matapelajaran</th>
				<th>Nilai</th>
				<th>Rank</th>
				<th>SET</th>
			</tr>
			<?php
				include 'create_table.php';
				$no =1;
				$sql = "SELECT matapelajaran.mapel, mapel_santri.id, mapel_santri.nilai_num, mapel_santri.nilai_alpha, santri.name, mapel_santri.mapel_id FROM mapel_santri JOIN matapelajaran ON mapel_santri.mapel_id = matapelajaran.id JOIN santri ON mapel_santri.santri_id = santri.id";
				$result = mysqli_query($connect, $sql);
				if (mysqli_num_rows($result)>0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "
							<tr>
								<td>".$no++."</td>
								<td>".$row['name']."</td>
								<td>".$row['mapel']."</td>
								<td>".$row['nilai_num']."</td>
								<td>".$row['nilai_alpha']."</td>
								<td>
									<a href='edit.php?id=".$row['id']."'><img src='https://cdn.pixabay.com/photo/2015/12/22/04/00/edit-1103599_960_720.png'></a>
									<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Are You Sure to Delete This?\")'><img src='http://www.practicepanther.com/wp-content/uploads/2016/07/recycle-bin.png'></a>
								</td>
							</tr>
						";
					}
				}
			?>
		</table>
	</form>
</body>
</html>
