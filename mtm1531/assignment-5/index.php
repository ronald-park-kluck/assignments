<?php

require_once 'includes/db.php';	

$sql = $db->query('
	SELECT id, movie_title, release_date, director
	FROM movies
	ORDER BY movie_title ASC
');

// Display the last error created by our database
//var_dump($db->errorInfo());

$results = $sql->fetchAll();

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Movie Browser</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<h1>Movie Browser</h1>
		
		<?php foreach ($results as $movie) : ?>
		<div class="movie">
			<h2>
				<a href="single.php?id=<?php echo $movie['id']; ?>">
					<?php echo $movie['movie_title']; ?>
				</a>
			</h2>
			<dl>
				<dt>Release Date:</dt>
				<dd><?php echo $movie['release_date']; ?></dd>
				<dt>Director:</dt>
				<dd><?php echo $movie['director']; ?></dd>
			</dl>
		</div>
		<?php endforeach; ?>
		
	</body>
</html>