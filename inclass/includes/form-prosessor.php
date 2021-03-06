<?php

$errors = array();


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT);

$meat = filter_input(INPUT_POST, 'meat', FILTER_SANITIZE_STRING);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// 0 is considered empty
	// Empty: 0, false, null, '', aray(), '0'
	if (empty($name)) {
		$errors['name'] = true;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	
	if (!array_key_exists($subject, $possible_subjects)) {
		$errors['subject'] = true;
	}
	
	if (mb_strlen($message) < 5 || mb_strlen($message) > 100) {
		$errors['message'] = true;
	}
	
	if (!isset($_POST['terms'])) {
		$errors['terms'] = true;
	}
	
	if ($meat != 'yeti' || $meat != 'leprechaun' || $meat != 'unicorn') {
		$errors['meat'] = true;
	}
	
	if (empty($errors)) {
		$headers = 'From: ' . $name . ' <' . $email . '>';
		mail('ronaldkluck@gmail.com', 'From contact form', $possible_subjects[$subject], $message, $headers);
	}
}


