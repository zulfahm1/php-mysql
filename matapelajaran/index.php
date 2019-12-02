<html>
	<head>
	<link rel="icon" type="png/jpg" href="https://www.cairnskangarooms.com/wp-content/uploads/2018/07/Fill-in-Form-Icon.png">
		<title>Form Santri | MAPEL</title>
	</head>
	<body>
		<?php 
			include '../layout/menu.php';
		?>
		<form>
			<p class="add"><a href="adding.php"><img src="https://www.shareicon.net/data/256x256/2016/06/27/623443_book_256x256.png"></a></p>
			<table class="tabeel" id="mapel">
				<tr>
					<th>No</th>
					<th>Matapelajaran</th>
					<th>Edit</th>
				</tr>
				<?php
					include 'create_table.php';
					$no = 1;
					$sql = "SELECT * FROM matapelajaran";
					$result = mysqli_query($connect,$sql);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "
								<tr>
									<td>".$no++."</td>
									<td>".$row['mapel']."</td>
									<td>
										<a href='edit.php?id=".$row['id']."'><img src='https://cdn.pixabay.com/photo/2015/12/22/04/00/edit-1103599_960_720.png'></a>
										<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Are You Sure to Delete This Mapel?\")'><img src='http://www.practicepanther.com/wp-content/uploads/2016/07/recycle-bin.png'></a>
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
