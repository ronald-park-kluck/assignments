<?php
	$planet = '';
			
			if (isset($_GET['planet'])) {
				$planet = strtolower($_GET['planet']);
			}
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Planets</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<nav>
			<ul class="tab-btn planets">
				<li<?php if ($planet != 'mars' && $planet != 'jupiter' && $planet!= 'venus') { ?> class="current-tab"<?php } ?>><a href="?planet=earth">Earth</a></li>
				<li<?php if ($planet == 'mars') { ?> class="current-tab"<?php } ?>><a href="?planet=mars">Mars</a></li>
				<li<?php if ($planet == 'jupiter') { ?> class="current-tab"<?php } ?>><a href="?planet=jupiter">Jupiter</a></li>
				<li<?php if ($planet == 'venus') { ?> class="current-tab"<?php } ?>><a href="?planet=venus">Venus</a></li>
			</ul>
		</nav>
		
		<div class="text-field">
		<?php 
			
			
			
			switch ($planet) {
				case 'mars' :
					include 'includes/mars.php';
				break;
				case 'jupiter' :
					include 'includes/jupiter.php';
				break;
				case 'venus' :
					include 'includes/venus.php';
				break;
				default :
					include 'includes/earth.php';
				break;
			}
		?>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/planets.js"></script>
		
	</body>
</html>