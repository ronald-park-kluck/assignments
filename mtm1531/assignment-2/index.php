<?php



?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>My Money Calculator</title>
</head>

<body>
	<form action="index.php" method="post">
		<label for="num1">First Number</label>
			<input type="number" id="num1" name="num1">
			
			<label for="num2">Second Number</label>
			<input type="number" id="num2" name="num2">
			
			<label for="func">Function</label>
			<select id="func" name="func">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			
		<button>Calculate</button>
		
		<strong>$<?php echo number_format($total, 2); ?></strong>
	</form>
</body>
</html>