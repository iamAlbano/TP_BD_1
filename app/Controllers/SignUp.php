<?php

namespace App\Controllers;

class SignUp extends BaseController
{
	public function index()
	{	
		echo view('templates/html_header');
		echo view('signup');

		// return view('welcome_message');
	}
}