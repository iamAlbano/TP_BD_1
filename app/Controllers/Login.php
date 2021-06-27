<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{	
		echo view('templates/html_header');
		echo view('login');

		// return view('welcome_message');
	}
}