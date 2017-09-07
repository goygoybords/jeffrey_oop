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
		public function login()
		{
			$table = "users";
			$fields = array('*');
			$where = "username = ? AND password = ? AND status = 1";
			$params = array(htmlentities($_POST['username']), md5(htmlentities($_POST['password'])) );
			$user = App::get('database')->select($table, $fields, $where, $params);
			if(count($user) > 0)
			{
				foreach ($user as $l ) 
				{
					redirect('home');
				}
			}
			else
			{
				redirect('/');
				//redirect('/?=1');
				//header("location: ../");
			}
		}
	} 

?>