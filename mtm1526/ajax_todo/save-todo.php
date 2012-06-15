<?php

require_once 'includes/db.php';

$item = filter_input(INPUT_POST, 'item', FILTER_SANITIZE_STRING);

$sql = $db->prepare('
	INSERT INTO todos (item, done)
	VALUES (:item, 0)
');
$sql->bindValue(':item', $item, PDO::PARAM_STR);
$sql->execute();