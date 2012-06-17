<?php

$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);


//var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (strlen($movie_title) < 1 || strlen($movie_title) > 256) {
		$errors['movie_title'] = true;
	}
	
	if(strlen($release_date) != 10) {
		$errors['release_date'] = true;
	}
	
	if (strlen($director) < 1 || strlen($director) > 256) {
		$errors['director'] = true;
	}
	
	if (empty($errors)) {
		// Do DB stuff
		require_once 'includes/db.php';
		
		$sql = $db->prepare('
		INSERT INTO movies (movie_title, release_date, director)
		VALUES (:movie_title, :release_date, :director)
		');
		$sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
		$sql->bindValue(':director', $director, PDO::PARAM_STR);
		$sql->execute();
		
		
		/*var_dump($db->errorInfo());*/
		header('Location: index.php');
		exit;
	}
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add a new Movie Title</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		
		<h1>Add A New Movie</h1>
		
		<form method="post" action="add.php">
			<div class="movie">
				<div>
					<label for="movie_title">
						Movie Title:
						<?php if (isset($errors['movie_title'])) : ?>
						<strong class="error">Is required</strong>
						<?php endif; ?>
					</label>
					<input id="movie_title" name="movie_title" required value="<?php echo $movie_title; ?>">
				</div>
				
				<div>
					<label for="release_date">
						Release Date:
						<?php if (isset($errors['release_date'])) : ?>
						<strong class="error">Is required</strong>
						<?php endif; ?>
					</label>
					<input id="release_date" name="release_date" required value="<?php echo $release_date; ?>">
				</div>
				
				<div>
					<label for="director">
						Director:
						<?php if (isset($errors['director'])) : ?>
						<strong class="error">Is required</strong>
						<?php endif; ?>
					</label>
					<input id="director" name="director" required value="<?php echo $director; ?>">
				</div>
				<button type="submit">Add</button>
			</div>
			<p><a href="index.php">Back to list</a></p>
	</body>
</html>