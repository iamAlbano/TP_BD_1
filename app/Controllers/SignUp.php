<?php

namespace App\Controllers;

use App\Libraries\User;

class SignUp extends BaseController
{
    public function register(){
        $u = new User('teste@email.com', 'Nome', 'Sobrenome', 'username', 'senha123');
        var_dump($u);
        
    }

	public function index()
	{	
		echo view('templates/html_header');
		echo view('signup');

		// return view('welcome_message');
	}
}