<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
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

	<h2 id="edit_user_title">DELETE USER </h2>
	<?php
		while($row = mysqli_fetch_array($users)) {
			echo "<div class=\"delete\"> <p>{$row['user_fname']}</p><a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br><br></div>";
		}
	?>
</html>
