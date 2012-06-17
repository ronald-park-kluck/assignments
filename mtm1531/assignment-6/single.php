<?php

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = $db->prepare('
	SELECT id, movie_title, release_date, director
	FROM movies
	WHERE id = :id

');

$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title><?php echo $results['movie_title']; ?></title>
	<link href="css/general.css" rel="stylesheet">
	</head>
	<body>
		<div class="movie">
			<h2><?php echo $results['movie_title']; ?></h2>
				<dl>
				<dt>Release Date:</dt>
				<dd><?php echo $results['release_date'];?></dd>
				<dt>Director:</dt>
				<dd><?php echo $results['director'];?></dd>
			</dl>
			
			<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
			<a href="delete.php?id=<?php echo $id;?>">Delete this movie</a>
		</div>
		
		<p><a href="index.php">Back to list</a></p>
	</body>
</html>