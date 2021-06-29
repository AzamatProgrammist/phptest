<?php 

include_once("connect.php");
/*
$host = "localhost";
$username = "root";
$password = "root";
$database = "test";


$dsn = "mysql:host=$host;dbname=$database";

// create a PDO instance
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$name = "Shuhrat";
$fam = "Axnazov";
$login = "Shuhrat97";

// insert

$sql1 = "INSERT INTO test(name,fam,login)VALUE(:name,:fam,:login)";
$stmt = $pdo->prepare($sql1);
$stmt->execute(['name' => $name,'fam' => $fam,'login' => $login]);

echo $stmt->rowCount();
*/
	//$sql = "SELECT * FROM test";
	//$stmt = $pdo->query($sql);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>update php mysql</title>
</head>
<body>

	<?php foreach ($stmt as $kmas): ?>

				<form class="kurs1_11Forma" action="connect.php" method="POST" enctype="multipart/form-data">
				<br>
			<label>id: <?php echo $kmas->id ?></label>
			
			<div class="forma">	
				<label>Ismingiz:</label>
				<input type="text" name="name" value="<?php echo $kmas->name ?>">
			</div>
			<div class="forma">	
				<label>Familyangiz:</label>
				<input type="text" name="fam" value="<?php echo $kmas->fam ?>">
			</div>
			<div class="forma">	
				<label>Login:</label>
				<input type="text" name="login" value="<?php echo $kmas->login ?>">
			</div>
				<button class="btn" type="submit" name="update">Yangilash</button>
			</form>

	<?php endforeach; ?>

</body>
</html>