






<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register Yourself Here!</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
	<?php if ($display_thanks) : ?>
	<strong>Thanks for registering.</strong>
	<?php else : ?>
	<form action="index.php" method="post">
	<div>
		<label for="name">Name <?php if (isset($errors['name'])) : ?><strong>is required</strong><?php endif; ?>			</label>
		<input id="name" name="name" value="<?php echo $name; ?>">
	</div>
	<div>
		<label for="email">E-mail <?php if (isset($errors['email'])) : ?><strong>is required</strong><?php endif; ?>	</label>
		<input id="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div>
		<label for="username">Username <?php if (isset($errors['username'])) : ?><strong>is required and a maximum of 25 characters</strong><?php endif; ?></label>
		<input id="username" name="username" value="<?php echo $username; ?>">
	</div>
	<div>
		<label for="password">Password <?php if (isset($errors['password'])) : ?><strong>is required</strong><?php endif; ?></label>
		<input type="password" id="password" name="password" value="<?php echo $password; ?>">
	</div>
		<fieldset>
		<legend>Preferred language</legend>
		<?php if (isset($errors['preferredlang'])) : ?><strong>Select your preferred language</strong><?php endif; ?>
		<input type="radio" id="lang-en" name="preferredlang" value="en"<?php if ($preferredlang == 'en') { echo ' checked'; } ?>>
		<label for="lang-en">English</label>
		<input type="radio" id="lang-fr" name="preferredlang" value="fr"<?php if ($preferredlang == 'fr') { echo ' checked'; } ?>>
		<label for="lang-fr">Français</label>
		<input type="radio" id="lang-es" name="preferredlang" value="es"<?php if ($preferredlang == 'es') { echo ' checked'; } ?>>
		<label for="lang-es">Espaniol</label>
		</fieldset>
	<div>
		<label for="notes">Notes</label>
		<textarea id="notes" name="notes"><?php echo $notes; ?></textarea>
	</div>
	<div>
		<input type="checkbox" id="acceptterms" name="acceptterms" value="1"<?php if (isset($_POST['acceptterms'])) { echo ' checked'; } ?>>
		<label for="acceptterms">I accept the terms. <?php if (isset($errors['acceptterms'])) : ?><strong>You must agree to the terms.</strong><?php endif; ?></label>
	</div>
	<div>
		<button type="submit">Register</button>
	</div>
</form>
<?php endif; ?>
	
	</body>
</html>