<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');

	$tbl="tbl_movies";
	$genQuery = getAll($tbl);

	$value_id = 1; //placeholder so there is no errors when blank

	if(isset($_POST['submit'])) {

		$value_id = $_POST['editList'];
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit All</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

	<div class="admin_nav">
		<ul>
		<li><a href="admin_index.php">Home</a></li>
		<li><a href="admin_editall.php">Edit Movie</a></li>
		<li><a href="admin_addmovie.php">Add Movie</a></li>
		<li><a href="admin_createuser.php">Create User</a></li>
		<li><a href="admin_edituser.php">Edit User</a></li>
		<li><a href="admin_deleteuser.php">Fired</a></li>
		<li><a href="phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
		</ul>

		</div>




		<form action="admin_editall.php" method="post" enctype="multipart/form-data">
<label>Select</label>
			<select name="editList">
				<option value="">Select A Movie</option>
				<?php
				while($row = mysqli_fetch_array($genQuery)){
					echo "<option value=\"{$row['movies_id']}\">{$row['movies_title']}</option>";

				}
				?>
			</select><br><br><br>
			<input type="submit" name="submit" value="Select Movie">
		</form>




	<?php
		echo single_edit("tbl_movies","movies_id",$value_id); //The number is the ID of the movie I need to get a way to change this on a click or soemthing
			//phpinfo();
?>


</body>
</html>
