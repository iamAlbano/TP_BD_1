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
		if(!session()->has('name')){
		header("Location: Home");
		die();  }
	}

	public function myData(){
		$userInfo = [
			'name' => session()->name,
		  ];
		echo view('templates/html_header');
        echo view('templates/navbar');
		
		echo view('templates/UserInformation', ['user' => $userInfo]);
	}

	public function viewData(){

		$db = DB::connect();

		$query = $db->query('SELECT U.`id`, U.`first_name`, U.`last_name`, U.`username` 
		FROM `tb_user` U,
    	WHERE U.`id`=`id_user`');

		$userInfo = [
			'name' => session()->name,
  			];

		

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

		$db->close();

		$this->log($parameter['name'], $parameter['username']);
		
        
    }


	public function log($name, $username){
		session()->set([
			'name' => $name,
			'username' => $username]);
			header("Location: /TP_BD_1/public/Home");
			die();
	
	}


}