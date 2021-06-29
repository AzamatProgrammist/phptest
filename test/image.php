<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>image</title>
</head>
<body>

	<?php 

		$dbh = new PDO("mysql:host=localhost;dbname=test", "root", "root");
		if (isset($_POST['btn'])) {
			$name = $_FILES['myfile']['name'];
			$type = $_FILES['myfile']['type'];
			$data = file_get_contents($_FILES['myfile']['tmp_name']);
			$page = $_POST['page'];
			$login = $_POST['login'];
			$stmt = $dbh->prepare("INSERT INTO images (name, mimi, data, page, login) VALUES(:name, :type, :data, :page, :login)");
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':type',$type);
			$stmt->bindParam(':data',$data);
			$stmt->bindParam(':page',$page);
			$stmt->bindParam(':login',$login);
			$stmt->execute();
			echo $name;
		}
		if (isset($_POST['update'])) {
			$name = __dir__.$_FILES['rasm']['name'];
			echo $name;
			$type = $_FILES['rasm']['type'];
			$data = base64_encode(file_get_contents($_FILES['rasm']['tmp_name']));
			$page = $_POST['page'];
			$login = $_POST['login'];
			$stmt = $dbh->prepare("UPDATE images SET `name`=:name, `mimi`=:type, `data`=:data, `page`=:page, `login`=:login");
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':type',$type);
			$stmt->bindParam(':data',$data);
			$stmt->bindParam(':page',$page);
			$stmt->bindParam(':login',$login);
			$stmt->execute();
		}

	 ?>

	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<label>page</label>
		<input type="test" name="page">
		<label>login</label>
		<input type="test" name="login">
		<button name="btn">Upload</button>
	</form>
<br><br>


<ol>

	<?php 

		$stmt = $dbh->prepare("SELECT * FROM images");
		$stmt->execute();
		while ($row = $stmt->fetch()) {
			echo "<li><a target='_blank' href='viewimg.php?id=".$row['id']."'>".$row['name']."</a></li>";
			
			 echo '<img src="data:'.$row['mimi'].';base64,'.base64_encode($row['data']).' " style="width: 100px; border-radius: 50%;">';
			 ?>


	<form method="POST" enctype="multipart/form-data">
		<label>rasm tanlash</label>
		<input type="file" name="rasm"><br>
		<label>page</label>
		<input type="text" name="page" value="<?php echo $row['page'] ?>"><br>
		<label>login</label>
		<input type="text" name="login" value="<?php echo $row['login'] ?>"><br><br>
		<button name="update">Update</button>
	</form>


			 <?php

		}

	 ?>
</ol><br><br>


</body>
</html>