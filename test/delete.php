<?php 
ob_start();
	$title = 'Delete';
	include_once('conn.php');

	if (!isset($_GET['id'])) {
		echo "error";
	}else
	{
		$id = $_GET['id'];
		$result = $crud->getDeleteDetails($id);

		if ($result) {
			header("Location: viewrecords.php");
			ob_end_fluch();
		}else{
			echo "error";
		}
	}

 ?>