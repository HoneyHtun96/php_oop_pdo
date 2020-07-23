<?php 
$store_data = array(
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'phone' => $_POST['phone']
);
$database->insert('testing',$store_data);
header('location:show_data');
 