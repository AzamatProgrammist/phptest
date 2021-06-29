<?php 
	$title = "View Record";
	include_once('conn.php');

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = $crud->getOlimDetails($id);
	}
 ?>
<link rel="stylesheet" type="text/css" href="style.css">
 <div class="boy">
	<div id="header">	
			<input class="check" type="checkbox" name="check">
			<span></span>
			<span></span>
			<span></span>
			<ul class="menu">
				<li class="belgi"><a class="belgi" href="index.php">Bosh sahifa</a></li>
				<li><a href="viewrecords.php">viewrecords</a></li>
				<li><a href="success.php">Success</a></li>
				<li><a href="#">3-kurs</a></li>
				<li><a href="#">4-kurs</a></li>
			</ul>
		</div>
	</div>
<br><br>
<label>Your Name</label>
<h2><?php echo $result['name']; ?></h2>
<label>Your Last name:</label>
<h2><?php echo $result['familyasi']; ?></h2>
<label>Your login:</label>
<h2><?php echo $result['logini']; ?></h2>
<label>Your Password:</label>
<h2><?php echo $result['paroli']; ?></h2>
<label>Your Jobs:</label>
<h2><?php echo $result['kasb']; ?></h2>






















