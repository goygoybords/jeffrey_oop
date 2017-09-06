<?php 

namespace App\Controllers;

use App\Core\App;
	
	class UsersController
	{
		public function index()
		{
			$title = "Users";
			$users = App::get('database')->selectAll('users');
			return view('users' , ['users' => $users, 'title' => $title]);
		}
		public function store()
		{
			App::get('database')->insert('users', [
				'name' => $_POST['name']
			]  );

			redirect('users');
			
		}
	} 

?>