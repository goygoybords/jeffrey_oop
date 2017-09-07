<?php 

namespace App\Controllers;

	class PagesController
	{
		public function login()
		{
			$title = "Login";
			return view('index', ['title' => $title]);
		}
		public function home()
		{
			$title = "Home";
			return view('home', ['title' => $title]);
		}
		public function about()
		{
			$title = "About Us";
			$company = "laracast";
			return view('about' , ['title' => $title ,'company' => $company]);
		}
		public function contact()
		{
			$title = "Contact Us";
			return view('contact', ['title' => $title] );
			
		}
	}

?>