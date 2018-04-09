<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<header class="admin_header">

	<h1>Welcome to your admin page</h1>
	<div class="logo">
	<a href="admin_index.php"><img src="../images/logo.png" alt="my logo"></a>
		</div>
		</header>

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


	<?php echo "<h2 class=\"welcome_message\">Hi - {$_SESSION['user_name']}</h2>"; ?>




</body>
</html>
