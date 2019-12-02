<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
			include '../layout/menu.php'; 
			include 'create_table.php';
		  $ID = $_GET['id'];
			$sql = "SELECT * FROM santri WHERE id=$ID";
			$result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_assoc($result);
		?>
		<form action="edit_proccess.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<table class="adding">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" value="<?php echo $row['password']; ?>"></td>
				</tr>
				<tr>
					<td>Born Date</td>
					<td>:</td>
					<td><input type="date" name="born" value="<?php echo $row['born']; ?>"></td>
				</tr>
				<tr><td colspan="3"><label>
					<img src="https://www.pngrepo.com/download/204964/confirm.png">
					<input type="submit" value="EDIT!">	
				</label></td></tr>
			</table>
		</form>
	</body>
</html>
