<?php

namespace App\Controllers;

use Config\Database as DB;

class Login extends BaseController
{



  public function index()
  {
	
    $this->isLoggedIn();
    header("Location: Login/frontend");
	die();
   
  }

  public function frontend()
  {
    echo view('templates/html_header');
    echo view('login');
  }

  public function incorrect()
  {
    echo view('templates/message', ['message' => 'E-mail ou senha incorretos', 'type' => 'warning']);
	$this->isLoggedIn();
    $this->frontend();
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

    $data = $db->query("SELECT * FROM tb_user WHERE email = :email: AND pass = :password:", $parameter)->getResultObject();

    if (empty($data)) {
		header("Location: incorrect");
		die();

    } else {
      $this->log($data['0']->id, $data['0']->username, $data['0']->first_name);
    }

    $db->close();
  }
}
