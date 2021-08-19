<?php

namespace App\Controllers;

use Config\Database as DB;
use App\Libraries\Post as Post;


class CreatePost extends BaseController
{

  public function index()

  {

    if ($this->request->getPost()){
      $this->createPost();
    }
    echo view('templates/html_header');
    echo view('templates/navbar');
    echo view('templates/createPost/createPost', ['form' => view('templates/createPost/newPostForm')]);
    echo view('templates/footer');
  }

  public function createPost(){
    
    $db = DB::connect();

    $post = [
      'id_user' => session()->get('id'),
      'title' => $this->request->getPost('title'),
      'text' => $this->request->getPost('text'),
      'category' => $this->request->getPost('category'),
    ];


    $data = $db->query("INSERT INTO  `tb_post`
    (`id_user`, `title`, `text`, `category`)
    VALUES(
      :id_user:,
      :title:,
      :text:,
      :category:
    )", $post);

    $db->close();

    header("Location: /TP_BD_1/public/Home");
    die();

  }
}
