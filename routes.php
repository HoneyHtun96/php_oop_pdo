<?php

$router->define([

	'php_oop_pdo' => 'controllers/index.php',
	'php_oop_pdo/about' => 'controllers/about.php',
	'php_oop_pdo/contact' => 'controllers/contact.php',
  '404' => 'controllers/404.php',
  'php_oop_pdo/users' => 'controllers/user.php',
  'php_oop_pdo/create' =>'controllers/create.php',
  'php_oop_pdo/storedata' => 'controllers/store_data.php',
  'php_oop_pdo/show_data' => 'controllers/show_data.php',
  'php_oop_pdo/testing' => 'controllers/testing_create.php',
  'php_oop_pdo/testing_data' => 'controllers/testingdata.php',
  'php_oop_pdo/delete_data' => 'controllers/delete_data.php'
]);

// $router->define('about', 'controllers/about.php');

// Route::get('contact','controllers/contact.php');