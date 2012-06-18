<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sessions</title>
	</head>
	
	<body>
		<p>Allow us to track our users as they move around our aplication.</p>
		<p><strong>They are lost as soon as the user closes their browser.</strong></p>
		
		<?php
			
			// Before we can do anything with sessions we must turn on the engine
			session_start();
			
			if(!isset($_SESSION['page-views'])) {
				$_SESSION['page-views'] = 0;
			}
			
			$_SESSION['page-views']++;
			
			echo $_SESSION['page-views'];
		?>
	</body>
</html>