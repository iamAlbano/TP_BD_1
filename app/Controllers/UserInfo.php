<?php

namespace App\Controllers;

use App\Libraries\User;

use Config\Database as DB;

class UserInfo extends BaseController
{
 

	public function index()
	{	
		$this->isLoggedIn();
		header("Location: UserInfo/myData");
		die();
	

	}

	public function username()
  {
	$this->isLoggedIn();
    $this->myData();
	echo view('templates/message', ['message' => 'Nome de usuário indisponível!', 'type' => 'warning']);
    }

  public function email()
    {
	$this->isLoggedIn();
    $this->myData();
	echo view('templates/message', ['message' => 'E-mail já cadastrado!', 'type' => 'warning']);
    }

	public function isLoggedIn(){
		if(!session()->has('name')){
		header("Location: Home");
		die();  }
	}

	public function myData(){
		$data = $this->viewData();
		
		$userInfo = [
			'name' => $data[0]->first_name,
			'last_name' => $data[0]->last_name,
			'email' => $data[0]->email,
			'username' => session()->username,
		  ];

		echo view('templates/html_header');
        echo view('templates/navbar');
		echo view('templates/UserInformation', ['user' => $userInfo]);
	}

	public function viewData(){

		$db = DB::connect();

		$parameter = ['username' => session()->username];

		$data = $db->query("SELECT * FROM tb_user WHERE username = :username:", $parameter)->getResultObject();
		
		$db->close();

		return $data;	
        
    }

	public function changeData(){

		$user = $this->viewData();

		$db = DB::connect();
    	$parameter = [
		'id' => $user[0]->id,
		'first_name' => $this->request->getPost('firstName'),
		'last_name' => $this->request->getPost('lastName'),
     	 'email' => $this->request->getPost('email'),
      	 'username' => $this->request->getPost('username')
   		 ];
		

		$data = $db->query("SELECT * FROM tb_user WHERE email = :email: OR username  = :username:", $parameter);
		
		

		foreach ($data->getResult() as $row){
			
			if(strcmp($row->email,$parameter['email']) && !strcmp($row->email, $user[0]->email) ){
				header("Location: email");
				die();
				
			} 
			
			if(strcmp($row->username, $parameter['username']) && !strcmp($row->username, $user[0]->username)){
				header("Location: username");
				die();
			
			}
			
		}

		$newData = $db->query("UPDATE `tb_user`
		SET `first_name` =  :first_name:,
		 	`last_name` = :last_name:,
			 `email` = :email:,
		 	`username` = :username:
		WHERE `id` = :id:", $parameter);


		$db->close();
		$this->update($parameter['first_name'], $parameter['username']);
		header("Location: /TP_BD_1/public/UserInfo/myData");
		die();


	}


	public function update($name, $username){
		session()->set('name', $name);
		session()->set('username',  $username);
	
	}



	public function log($name, $username){
		session()->set([
			'name' => $name,
			'username' => $username]);
			header("Location: /TP_BD_1/public/Home");
			die();
	
	}


}