<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movies_id";
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php
		if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
			echo "<img class=\"details_img\" src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
				<h2 class=\"detials_txt\">{$row['movies_title']}</h2>
				<p class=\"detials_txt\">{$row['movies_year']}</p>
				<p class=\"detials_txt\">{$row['movies_storyline']}</p>
				<video width=\"1080\" height=\"720\" controls>
				<source src=\"videos/{$row['movies_trailer']}\" type=\"video/mp4\">
				</video>
				<a href=\"index.php\"><p class=\"back\">Back...</p></a>";
		}else{
			echo "<p class=\"error\">{$getSingle}</p>";
		}
	?>
</body>
</html>
