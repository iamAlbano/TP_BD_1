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

    echo view('templates/html_header');
    echo view('templates/navbar');
    echo view('testeDb');

    #\var_dump($this->getAllUsers());

    echo view('templates/teste/teste', ['results' => $this->getAllUsers()]);
    echo view('templates/footer');
  }
}
