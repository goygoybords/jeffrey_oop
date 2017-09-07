<?php 
	$router->get('', 'PagesController@login');
	$router->get('home', 'PagesController@home');
	$router->get('about', 'PagesController@about');
	$router->get('contact' , 'PagesController@contact');
	$router->get('users' , 'UsersController@index');
	$router->post('users' , 'UsersController@store');
	// $router->post('names' , 'controllers/add-name.php');
?>	