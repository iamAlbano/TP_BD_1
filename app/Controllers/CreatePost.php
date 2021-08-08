<?php

namespace App\Controllers;

use Config\Database as DB;


class CreatePost extends BaseController
{
  public function index()

  {

    echo view('templates/html_header');
    echo view('templates/navbar');
    echo view('templates/createPost/createPost', ['form' => view('templates/createPost/newPostForm')]);

    if ($this->request) {
      // salvar o post e redirecionar
      echo '<pre>';
      \var_dump(session()->get('name'));
      \var_dump(session()->get('username'));
      \var_dump(session()->get('id'));
      echo '</pre>';

      echo '<pre>';
      \print_r($this->request->getPost());
      echo '</pre>';
    }
    echo view('templates/footer');
  }
}
