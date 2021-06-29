<?php 

$host = "localhost";
$username = "root";
$password = "root";
//$database = "test";


//$dsn = "mysql:host=$host;dbname=$database";

// create a PDO instance
//$pdo = new PDO($dsn, $username, $password);
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// PDO query 
//$stmt = $pdo->query("SELECT * FROM test");
/*while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $row['name']." ".$row['fam']."<br/>";
}
*/

/*while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
	echo $row->name." ".$row->fam."<br>";
}*/
/*
while ($row = $stmt->fetch()) {
	echo $row->name." ".$row->fam."<br>";
}*/

// prepared statements
//$sql = "SELECT * FROM test WHERE name = '$input'";
$fam = "Teshaboyev";

// positional Parameters
/*$sql = "SELECT * FROM test WHERE fam = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$fam]);
$username = $stmt->fetchAll();
*/
/*
$sql = "SELECT * FROM test WHERE fam = :fam";
$stmt = $pdo->prepare($sql);
$stmt->execute(['fam' => $fam]);
$username = $stmt->fetchAll();



foreach ($username as $user) {
	echo $user->name." ".$user->fam." ".$user->login."<br>";
}*/
$name = "Azamat";
// getting a single
/*$sql = "SELECT * FROM test WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$username = $stmt->fetch();

echo $username->name;
*/

// getting number of rows
/*$sql = "SELECT * FROM test WHERE name = :name";
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name]);
$usernameCount = $stmt->rowCount();


echo $usernameCount;*/
$name = "Shoh";
$login = "Shohruhxon";
$id = 4;

// insert

//$sql1 = "INSERT INTO test(name,fam,login)VALUE(:name,:fam,:login)";

/*
$sql1 = "UPDATE test SET name = :name, fam = :fam, login = :login WHERE id = :id";
$stmt = $pdo->prepare($sql1);
$stmt->execute(['name' => $name,'fam' => $fam,'login' => $login, 'id' => $id]);

echo $stmt->rowCount();
*/
/*
$sql = "DELETE FROM test WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
echo $stmt->rowCount([$id]);
*/

/*$search = "%voy%";
$sql = "SELECT * FROM test WHERE name LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$username = $stmt->fetchAll();
$usernameCount = $stmt->rowCount();
*/

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$fam = $_POST['fam'];
	$login = $_POST['login'];


$sql1 = "UPDATE test SET name = :name, fam = :fam, login = :login WHERE id = :id";
$stmt = $pdo->prepare($sql1);

$params = [

	':id' => $id,
	'name' => $name,
	'fam' => $fam,
	'login' => $login
];
if ($stmt->execute($params))
 {
 	echo "Muvaffaqiyatli";
}
else
{
	echo "Xatolik yuz berdi";
	exit;
}


}

 ?>














