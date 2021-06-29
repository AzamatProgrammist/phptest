<?php 


if (isset($_POST['export'])) {
	$conn = mysqli_connect("localhost","root","root","test");
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');
	$output = fopen("php://output", "w");
	fputcsv($output, array('ID', 'Name', 'Familyasi', 'Logini', 'Paroli', 'Kasb_id'));
	$query = "SELECT * FROM olim ORDER BY id DESC";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		fputcsv($output, $row);
	}
	fclose($output);
}


 ?>