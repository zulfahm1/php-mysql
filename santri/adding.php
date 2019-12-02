<html>
	<head>	
		<title>Adding Data</title>
		<style>
		</style>
	</head>
	<body>
			<?php 
				include '../layout/menu.php';
			?>
		<form action="add_proccess.php" method="POST">
			<table class="adding">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Born Date</td>
					<td>:</td>
					<td><input type="date" name="born"></td>
				</tr>
				<tr><td colspan="3">
					<label>
						<img src="http://pngimg.com/uploads/plus/plus_PNG115.png">
						<input type="submit">	
					</label>
				</d></tr>
			</table>
		</form>
	</body>
</html>
