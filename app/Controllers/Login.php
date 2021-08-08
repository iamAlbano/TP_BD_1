<?php

namespace App\Controllers;

use Config\Database as DB;

class Login extends BaseController
{



  public function index()
  {
	
    $this->isLoggedIn();
    header("Location: Login/SignIn");
	  die();
   
  }

  public function SignIn()
  {
    echo view('templates/html_header');
    echo view('login');
  }

  public function incorrect()
  {
    echo view('templates/message', ['message' => 'E-mail não encontrado', 'type' => 'warning']);
	  $this->isLoggedIn();
    $this->SignIn();
  }

  public function incorrectPass()
  {
    echo view('templates/message', ['message' => 'Senha incorreta', 'type' => 'warning']);
	  $this->isLoggedIn();
    $this->SignIn();
  }

  //cria a sessão
  public function log($id, $name, $username)
  {
    session()->set([
      'id' => $id,
      'name' => $name,
      'username' => $username
    ]);
    header("Location: ../Home");
    die();
  }

  public function isLoggedIn()
  {
    if (session()->has('name')) {
      header("Location: Home");
      die();
    }
  }


  public function autentication()
  {

    $db = DB::connect();
    $parameter = [
      'email' => $this->request->getPost('email'),
      'password' => $this->request->getPost('pass')
    ];

    $data = $db->query("SELECT * FROM tb_user WHERE email = :email:", $parameter)->getResultObject();

    if (empty($data)) {
		header("Location: incorrect");
		die();

    } 

    var_dump($data);

    if(password_verify($parameter['password'], $data[0]->pass)){

      $this->log($data['0']->id, $data['0']->username, $data['0']->first_name);
    } else {
      header("Location: incorrectPass");
		die();
    }

    $db->close();
  }
}
