<?php 
$store_data = array(
	'description' => $_POST['description'],
	'completed' => $_POST['complete']
);
$database->insert('todos',$store_data);
 header('Location: http://localhost/php_oop_pdo/');