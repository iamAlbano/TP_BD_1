<?php

namespace App\Controllers;

use Config\Database as DB;

class TesteDB extends BaseController
{

  private function getAllUsers()
  {
    $db = DB::connect();
    $query = $db->query('SELECT * FROM `tb_user`');

    $results = array();
    if ($query) {
      foreach ($query->getResultObject('App\Libraries\User') as $row) {
        $results[] = $row;
      }
    }
    return $results;
  }

  public function index()
  {

    /*
    header('Access-Control-Allow-Origin: website_url');
    header("Content-Type: application/json; charset=UTF-8");
    Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
    */
    echo view('templates/html_header');
    echo view('templates/navbar');
    echo view('testeDb', ['form' => view('templates/createPost/createPost')]);

    #\var_dump($this->getAllUsers());

    #echo view('templates/teste/teste', ['results' => $this->getAllUsers()]);
    if ($this->request) {
      echo '<pre>';
      \var_dump($this->request->getPost());
      echo '</pre>';

      // if (isset($_FILES['upload'])) {
      //   echo 'upload';
      //   \var_dump($_FILES['upload']);
      // }
    }
    echo view('templates/footer');
  }


  public function form()
  {
    echo ($this->request);
  }
}
