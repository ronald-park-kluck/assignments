<?php

require_once 'includes/db.php';

$sql = $db->query('
	SELECT id, item, done
	FROM todos
');

$results = $sql->fetchAll();

foreach ($results as $todo) {
	echo '<li>' . $todo['item'] . '</li>';
}

?>