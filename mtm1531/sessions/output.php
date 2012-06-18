<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Session output</title>
	</head>
	
	<body>
		<?php
			
			session_start();
			
			echo $_SESSION['page-views'];
			
		?>
	</body>
</html>