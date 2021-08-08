<?php


namespace App\Controllers;

use config\Database as DB;

class Post extends BaseController
{

  public function index()
  {

    echo view('templates/html_header');
    echo view('templates/navbar');
    echo view('templates/postPage/postPage', [
      'postContent' => view('templates/postPage/postContent'),
      'commentForm' => view('templates/postPage/commentForm'),
      'commentList' => view('templates/postPage/commentList')
    ]);
    echo view('templates/footer');
  }
}
