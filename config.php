<?php 

	return [
		'database' => [
						'name'       => 'mytodo',
						'username'   => 'root',
						'password'   => '12345',
						'connection' => 'mysql:host=localhost',
						'options'    => [
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
						]

					],

	];
?>