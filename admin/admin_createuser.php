<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
		}
	}

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


	<h2 id="edit_user_title">CREATE USER </h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
	<label>First Name:</label>
	<input class="user_info" type="text" name="fname" value="	<?php if(!empty($fname)){echo $fname;} ?>
"><br><br>

	<label>Username:</label>
	<input class="user_info" type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?>
"><br><br>

	<label>Password:</label>
	<input class="user_info" type="text" name="password" value="	<?php if(!empty($password)){echo $password;} ?>
"><br><br>

	<label>Email:</label>
	<input class="user_info" type="text" name="email" value="	<?php if(!empty($email)){echo $email;} ?>
"><br><br>

	<label >User Level:</label>
	<select name="userlvl">
		<option value="">Please select a user level</option>
		<option value="2">Web Admin</option>
		<option value="1">Web Master</option>
	</select><br><br>

	<input type="submit" name="submit" value="Create User">
	</form>
</body>
</html>
