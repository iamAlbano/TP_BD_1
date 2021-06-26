<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
		echo view('templates/html_header');
		echo view('templates/navbar');
		echo view('templates/body');
		echo view('templates/post');
		echo view('templates/post');
		echo view('templates/post');
		echo view('templates/post');
		echo view('templates/footer');
		// return view('welcome_message');
	}
}
