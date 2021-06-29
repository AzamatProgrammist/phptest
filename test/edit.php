
<?php 

	$title = 'Edit';
	include_once('conn.php');

	if (!isset($_GET['id'])) {
		echo "Error";
	}else{
		$id = $_GET['id'];
		$olim = $crud->getOlimDetails($id);


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
<h1>Update</h1>
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

<form method="POST" action="editpost.php">
	<input type="hidden" name="id" value="<?php echo $olim['id'] ?>">
	<div class="form-group">
		<label for="name">name</label>
		<input type="text" value="<?php echo $olim['name'] ?>" name="name" id="name">
	</div>
	<div class="form-group">
		<label for="familyasi">familyasi</label>
		<input type="text" value="<?php echo $olim['familyasi'] ?>" name="familyasi" id="familyasi">
	</div>
	<div class="form-group">
		<label for="logini">Logini</label>
		<input type="text" value="<?php echo $olim['logini'] ?>" name="logini" id="logini">
	</div>
	
	<div class="form-group">
		<label for="paroli">paroli</label>
		<input type="date" value="<?php echo $olim['paroli'] ?>" name="paroli" id="paroli">
	</div>
	<div class="form-group">
		<label for="kasb_id">kasb_id</label>
		<input type="number" value="<?php echo $olim['kasb_id'] ?>" name="kasb_id" id="kasb_id">
	</div>
	<div>
	<input type="submit" name="submit" value="Save Changes">
	</div>
</form>

<?php } ?>

