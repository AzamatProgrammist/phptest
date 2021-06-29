<?php 
	
	$title = "View Records";

	include_once('conn.php');

	$results = $crud->getOlim();



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
<table align="center" width="1000" border="1">
	<tr>
		<th>name</th>
		<th>familyasi</th>
		<th>logini</th>
		<th>paroli</th>
		<th>Jobs</th>
		<th>Actions</th>

	</tr>
	<?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>

		<tr>
			<td><?php echo $r['name']; ?></td>
			<td><?php echo $r['familyasi']; ?></td>
			<td><?php echo $r['logini']; ?></td>
			<td><?php echo $r['paroli']; ?></td>
			<td><?php echo $r['kasb'] ?></td>
			<td>
				<a href="View.php?id=<?php echo $r['id']; ?>">View</a>
				<a href="edit.php?id=<?php echo $r['id']; ?>">Edit</a>
				<a onclick="return confirm('Siz <?php echo $r['name'] ?>ni bazadan olib tashlamoqchimisiz')" href="delete.php?id=<?php echo $r['id']; ?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>









