

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>Add a new Dinosaur</title>
	</head>
	
	<body>
		
		<h1>Add New Dinosaur</h1>
		
		<form method="method" action="add.php">
			
			<div>
				<label for="dino_name">Dinosaur Name</label>
				<label id="dino_name" name="dino_name" required>
			</div>
			
			<fieldset>
				<legend>Relationship with meat</legend>
				<input type="radio" id="love" name="loves_meat" value="1">
				<label for="love">Loves meat</label>
				<input type="radio" id="hate" name="loves_meat" value="0">
				<label form="hate">Hates Meat</label>
			</fieldset>
			
			<div>
				<input type="checkbox" id="in_jurassic_park" name="in_jurassic_park">
				<label for="in_jurassic_park">In Jurassic Park</label>
			</div>
	</body>
</html>