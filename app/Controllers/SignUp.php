<?php

namespace App\Controllers;

use App\Libraries\User;

use Config\Database as DB;

class SignUp extends BaseController
{
 

	public function index()
	{	
		$this->isLoggedIn();
		header("Location: SignUp/newUser");
		die();
	

	}

	public function username()
  {
	$this->isLoggedIn();
	echo view('templates/message', ['message' => 'Nome de usuário indisponível!', 'type' => 'warning']);
    $this->newUser();
  }

  public function email()
  {
	$this->isLoggedIn();
	echo view('templates/message', ['message' => 'E-mail já cadastrado!', 'type' => 'warning']);
    $this->newUser();
  }

	public function isLoggedIn(){
		if(session()->has('name')){
		header("Location: Home");
		die();  }
	}

	public function newUser(){
		echo view('templates/html_header');
		echo view('signup');
	}

	public function register(){

		$db = DB::connect();

		$parameter = [
			'name' => $this->request->getPost('name'), 
			'lastName' => $this->request->getPost('lastName'),
			'username' => $this->request->getPost('username'), 
			'email' => $this->request->getPost('email'), 
			'password' => password_hash($this->request->getPost('pass'), PASSWORD_BCRYPT)
		];

		

		$data = $db->query("SELECT * FROM tb_user WHERE email = :email: OR username  = :username:", $parameter);

		foreach ($data->getResult() as $row){
			
			if($row->email == $parameter['email']){
				header("Location: email");
				die();
				
			} 
			
			if($row->username == $parameter['username']){
				header("Location: username");
				die();
			
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

    
    
	$userId = $db->query("SELECT `id` FROM tb_user WHERE email=:email: AND username=:username:", $parameter);
    $userId = $userId->getResult()[0]->id;
    
    $db->close();


		$this->log($userId, $parameter['name'], $parameter['username']);
        
    }


	public function log($id, $name, $username){
		session()->set([
			'id' => $id,
			'name' => $name,
			'username' => $username]);
			header("Location: ../Home");
			die();
	
	}


}