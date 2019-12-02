<!DOCTYPE html>
<html>
<head>
	<title>Adding Data</title>
</head>
<body>
	<?php
		include '../layout/menu.php';
	?>
	<form action="add_proccess.php" method="POST">
		<table class="adding">
			<tr>
				<td>Mapel</td>
				<td>:</td>
				<td><input type="text" name="mapel"></td>
			</tr>
			<tr>
				<td colspan="3">
					<label>
						<img src="http://pngimg.com/uploads/plus/plus_PNG115.png">
						<input type="submit">
					</label>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
