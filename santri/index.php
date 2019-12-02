<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="png/jpg" href="https://www.cairnskangarooms.com/wp-content/uploads/2018/07/Fill-in-Form-Icon.png">
	<title>Form Santri</title>
</head>
<body>
	<?php 
		include '../layout/menu.php';
	?>
	<p class="add"><a href="adding.php"><img src="https://findicons.com/files/icons/2443/bunch_of_cool_bluish_icons/512/add_user.png"></a></p>
	<table class="tabeel">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Tanggal Lahir</th>
			<th>set</th>
		</tr>
		<?php 
			include 'create_table.php';
			$no = 1;
			$sql = "SELECT * FROM santri";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
						<tr>
							<td>".$no++."</td>
							<td>".$row['name']."</td>
							<td>".$row['email']."</td>
							<td>".$row['password']."</td>
							<td>".$row['born']."</td>
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
	<div id="count">
		<p><a href="../santri/index.php">Santri</a></p>
		<p><a href="../matapelajaran/index.php">Mapel</a></p>
		<p><a href="../matapelajaran_santri/index.php">Mapel_Santri</a></p>
	</div>
</body>
</html>
