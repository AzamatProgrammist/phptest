
<?php 
	
	$conn = mysqli_connect("localhost","root","root","test");
	$query = "SELECT * FROM olim ORDER BY id DESC";
	$result = mysqli_query($conn, $query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Export</title>
</head>
<body>

	<div>
		<center>
			<h3>Export database to excel in php</h3>
			<form method="POST" action="exports.php">
				<input type="submit" name="export" value="CSV Export">
			</form>
			<table width="60%" align="center">
				<tr>
					<th width="5%">ID</th>
					<th width="25%">Name</th>
					<th width="25%">Familyasi</th>
					<th width="25%">Logini</th>
					<th width="15%">Paroli</th>
					<th width="5%">Kasb_id</th>
				</tr>
				<?php 

					while ($row = mysqli_fetch_assoc($result)) {
						?>
							<tr align="center">
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['familyasi']; ?></td>
								<td><?php echo $row['logini']; ?></td>
								<td><?php echo $row['paroli']; ?></td>
								<td><?php echo $row['kasb_id']; ?></td>
							</tr>
						<?php
					}

				 ?>
			</table>
		</center>
	</div>

</body>
</html>