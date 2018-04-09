<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getMovies = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>

	<?php
		include('includes/nav.html');

		if(!is_string($getMovies)){
			while($row = mysqli_fetch_array($getMovies)){
				echo "<div class=\"movie_container\"> <img class=\"movie_image\" src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
					<h2 class=\"movie_text\">{$row['movies_title']}</h2>
					<p class=\"movie_year\">{$row['movies_year']}</p>
					<a href=\"details.php?id={$row['movies_id']}\"><p class=\"movie_year\">More Details...</p></a>
					<br><br></div>";
			}
		}else{
			echo "<p class=\"error\">{$getMovies}</p>";
		}

		include('includes/footer.html');
	?>
</body>
</html>
