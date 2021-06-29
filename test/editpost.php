<?php 

	ob_start();
 ?>


<?php 
	include_once('conn.php');

if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$familyasi = $_POST['familyasi'];
		$logini = $_POST['logini'];
		$paroli = $_POST['paroli'];
		$kasb_id = $_POST['kasb_id'];
	}

	$result = $crud->editOlimDetails($id, $name, $familyasi, $logini, $paroli, $kasb_id);
	
	if ($result) 
	{
		header("Location: viewrecords.php");
		ob_end_fluch();
	}else
	{
		echo "error";
	}

 ?>