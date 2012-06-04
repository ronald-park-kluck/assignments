<?php

require_once 'includes/db.php';

$sql = $db->query('
	SELECT id, dino_name, loves_meat, in_jurassic_park
	FROM dinosaurs
	ORDER BY dino_name ASC
');

// Display the last error created by our database
var_dump($db->errorInfo());

$results = $sql->fetchAll();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dinosaurs</title>
	</head>
	
	<body>
		
		<?php foreach ($results as $dino) : ?>
		<h2><?php echo $dino['dino_name']; ?></h2>
		<dl>
			<dt>Loves meat</dt>
			<dd><?php echo $dino['loves_meat']; ?></dd>
			<dt>In Jurassic Park</dt>
			<dd><?php echo $dino['in_jurassic_park']; ?></dd>
		</dl>
		<?php endforeach; ?>
		
	</body>
</html>