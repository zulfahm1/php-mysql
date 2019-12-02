<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include '../layout/menu.php';
		include 'create_table.php';
		$ID = $_GET['id'];
		$sql = "SELECT nilai_num FROM mapel_santri WHERE id=$ID";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_assoc($result);
	?>
		<form action="edit_proccess.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<table class="adding">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>
						<select name="sans">
							<?php 
								$sql="SELECT id,name FROM santri";
								$result=mysqli_query($connect,$sql);
								while($row = mysqli_fetch_assoc($result)){
								?>
							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['name']; ?>
							</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Mapel</td>
					<td>:</td>
					<td>
						<select name="mapel_id">
							<?php 
								include 'create_table.php';
								$sql1="SELECT id,mapel FROM matapelajaran";
								$result1=mysqli_query($connect,$sql1);
								while($rows = mysqli_fetch_assoc($result1)){
								?>
							<option value="<?php echo $rows['id']; ?>">
								<?php echo $rows['mapel']; ?>
							</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nilai</td>
					<td>:</td>
					<td>
					<?php ?>
						<input type="number" name="nilai_num" value="<?php echo $row['nilai_num']; ?>">
					</td>
				</tr>
				<tr><td colspan="3"><label>
					<img src="https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_960_720.png">
					<input type="submit">
					</label>
				</tr></td>
			</table>
		</form>
</body>
</html>
