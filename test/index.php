
<?php 

	$title = 'Index';
	include_once('conn.php');

 ?>
 <link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	form, h1{
		text-align: center;
		width: 70%;
		margin: auto;
	}
	div{
		padding: 20px;
		width: 100%;
	}
	input{
		display: block;
		width: 100%;
		padding: 10px;
	}
	label{
		float: left;
	}

</style>
<h1>Ro'yhatdan o'tish</h1>
<div class="boy">
	<div id="header">
		
			<input class="check" type="checkbox" name="check">
			<span></span>
			<span></span>
			<span></span>
			<ul class="menu">
				<li class="belgi"><a class="belgi" href="index.php">Bosh sahifa</a></li>
				<li><a href="viewrecords.php">viewrecords</a></li>
				<li><a href="success.php">success</a></li>
				<li><a href="#">3-kurs</a></li>
				<li><a href="#">4-kurs</a></li>
			</ul>
		</div>
	</div>

<form method="POST" action="success.php">
	<div class="form-group">
		<label for="name">name</label>
		<input type="text" name="name" id="name">
	</div>
	<div class="form-group">
		<label for="familyasi">familyasi</label>
		<input type="text" name="familyasi" id="familyasi">
	</div>
	<div class="form-group">
		<label for="logini">Logini</label>
		<input type="text" name="logini" id="logini">
	</div>
	
	<div class="form-group">
		<label for="paroli">Tug'ulgan kuni</label>
		<input type="date" name="paroli" id="paroli">
	</div>
	<div class="form-group">
		<label>Kasbi:</label>
		<select name="selekt">
			<option value="1">Mathematic</option>
			<option value="2">Ximik</option>
			<option value="3">Fizik</option>
			<option value="4">Programmik</option>
			<option value="5">Biolik</option>
			<option value="6">Geogrif</option>
		</select>
	</div>
	<div>
	<input type="submit" name="submit" value="submit">
	</div>
</form>



