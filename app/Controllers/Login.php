<?php

namespace App\Controllers;
use Config\Database as DB;

class Login extends BaseController
{



	public function index()
	{	
		$this->isLoggedIn();
		$this->frontend();
		

	}

	public function frontend(){
		echo view('templates/html_header');
		echo view('login');
	}

	//cria a sessão
	public function log($name, $username){
		session()->set([
			'name' => $name,
			'username' => $username]);
			header("Location: ../Home");
			die();
	
	}

	public function isLoggedIn(){
		if(session()->has('name')){
		header("Location: Home");
		die();  }
	}


	public function autentication(){

		$db = DB::connect();
		$parameter = [
			'email' => $this->request->getPost('email'), 
			'password' => $this->request->getPost('pass')
		];
		$data = $db->query("SELECT * FROM tb_user WHERE email = :email: AND pass = :password:", $parameter)->getResultObject();
		
		if(empty($data)){
			print_r("E-mail ou senha incorretos");
			return;
		} else {
		 $this->log($data['0']->first_name, $data['0']->username);
			var_dump($data);
		}

		$db->close();

	}



}