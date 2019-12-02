<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<?php
		include '../layout/menu.php';
		include 'create_table.php';
		$ID = $_GET['id'];
		$sql = "SELECT * FROM matapelajaran WHERE id='$ID'";
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
	?>
		<form action="edit_proccess.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<table class="adding">
				<tr>
					<td>Mapel</td>
					<td>:</td>
					<td>
						<input type="text" name="mapel" 
						value="<?php echo $row['mapel']; ?>">
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<label>
							<img src="https://www.pngrepo.com/download/204964/confirm.png">
							<input type="submit" value="CHANGE">
						</label>
					</td>
				</tr>
			</table>
		</form>
</body>
</html>
