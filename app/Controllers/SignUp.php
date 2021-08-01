<?php

namespace App\Controllers;

use App\Libraries\User;

use Config\Database as DB;

class SignUp extends BaseController
{

	
    

	public function index()
	{	
		echo view('templates/html_header');
		echo view('signup');

		// return view('welcome_message');
	}

	public function isLoggedIn(){
		if(session()->has('name')){
		header("Location: Home");
		die();  }
	}

	public function register(){

		$db = DB::connect();

		$parameter = [
			'name' => $this->request->getPost('name'), 
			'lastName' => $this->request->getPost('lastName'),
			'username' => $this->request->getPost('username'), 
			'email' => $this->request->getPost('email'), 
			'password' => $this->request->getPost('pass')
		];

		


		$data = $db->query("SELECT * FROM tb_user WHERE email = :email: OR username  = :username:", $parameter);

		foreach ($data->getResult() as $row){
			
			if($row->email == $parameter['email']){
				echo 'Email já cadastrado!';
				return;
			} 
			
			if($row->username == $parameter['username']){
				echo 'O nome de usuário já existe!';
				return;
			}
			
		}

		$data = $db->query("INSERT INTO `tb_user`
		(`first_name`, `last_name`, `username`, `email`, `pass`) 
		VALUES(
			:name:,
			:lastName:,
			:username:,
			:email:,
			:password:
		)", $parameter);

		$db->close();

		header('Location: ../Login/autentication');
		die();
        
    }


}