<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
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

	<?php
		echo single_edit("tbl_movies","movies_id",1);
		//phpinfo();
	?>
</body>
</html>
