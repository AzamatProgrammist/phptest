<?php 
	
	ob_start();

 ?>
<?php 
	include_once('conn.php');


	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$familyasi = $_POST['familyasi'];
		$logini = $_POST['logini'];
		$paroli = $_POST['paroli'];
		$selekt = $_POST['selekt'];
		
		$isSuccess = $crud->insertOlim($name, $familyasi, $logini, $paroli, $selekt);
	}
 



	if ($isSuccess) {
		header("Location: viewrecords.php");
		ob_end_fluch();
	}



 ?>
