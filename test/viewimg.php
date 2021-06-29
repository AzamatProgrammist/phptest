<?php 

		$dbh = new PDO("mysql:host=localhost;dbname=test", "root", "root");
		$id = isset($_GET['id'])? $_GET['id'] : "";
		$stmt = $dbh->prepare("SELECT * FROM images");
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		$row = $stmt->fetch();
		header('Content-Type:'.$row['mimi']);
		echo $row['data'];




 ?>