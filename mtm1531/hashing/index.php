<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hashing</title>
	</head>
	
	<body>
		
		<?php
		
		// Hashes are the same every time
		echo md5('ronald');
		echo '<br>';
		echo md5('ronald');
		
		echo '<br>';
		echo sha1('ronald');
		
		echo '<br>';
		$rand = substr(
					strtr(
						base64_encode(
							openssl_random_pseudo_bytes(16)
						)
					, '+', '.')
				, 0, 22);
		$salt = '$2a$12$' . $rand;
		echo crypt('ronald', $salt);
		
		?>
	</body>
</html>