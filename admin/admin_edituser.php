<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$id = $_SESSION['user_id'];
	//echo $id;
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
	//echo $found_user;

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$result = editUser($id, $fname, $username, $password, $email);
			$message = $result;
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

	<section id="edit_user">
		<h2 id="edit_user_title">EDIT USER</h2>

		<img class="profile_image" src="images/user.svg" alt="template profile pic" height="100" width="100">

	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post">

				<img class="edit_icon" src="images/user-name.svg" alt="icon" height="20" width="20">
	<label>First Name:</label>
	<input class="user_info" type="text" name="fname" value="<?php echo $found_user['user_fname']; ?>
"><br><br>

<img class="edit_icon" src="images/profile.svg" alt="icon" height="20" width="20">
	<label>Username:</label>
	<input class="user_info" type="text" name="username" value="<?php echo $found_user['user_name']; ?>
"><br><br>

<img class="edit_icon" src="images/lock.svg" alt="icon" height="20" width="20">
	<label>Password:</label>
	<input class="user_info" type="text" name="password" value="<?php echo $found_user['user_pass']; ?>
"><br><br>

<img class="edit_icon" src="images/email.svg" alt="icon" height="20" width="20">
	<label>Email:</label>
	<input class="user_info" type="text" name="email" value="<?php echo $found_user['user_email']; ?>
"><br><br>
	<input class="user_info" type="submit" name="submit" value="Edit Account">
	</form>
</section>

</body>
</html>
