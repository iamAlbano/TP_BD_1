<?php

namespace App\Controllers;

use Config\Database as DB;

class Home extends BaseController
{

  public function index()
  {

    $this->isntLoggedIn();
    $this->frontend($posts = $this->posts());
  }

  public function posts()
  {
    /*
    $db = DB::connect();
    $query = $db->query('SELECT * FROM `tb_post`');

    $posts = array();
    if ($query) {
      foreach ($query->getResultObject('App\Libraries\Post') as $row) {
        $posts[] = $row;
      }
    }
    */


    $posts = [
      [
        'name' => 'Jusé',
        'username' => 'Zé_da_Roça',
        'text' => 'test de texto de post',
        'link' => 'https://www.youtube.com/embed/tgbNymZ7vqY'
      ],
      [
        'name' => 'Maria',
        'username' => 'Maria_da_Roça',
        'text' => 'test de texto de post 2',
        'link' => 'https://www.youtube.com/embed/pMdlF4rbf6Y'

      ],
      [
        'name' => 'Joana',
        'username' => 'Joana_da_Roça',
        'text' => 'test de texto de post 3',
        'link' => 'https://www.youtube.com/embed/pMdlF4rbf6Y'

      ],
      [
        'name' => 'LUAN DO GITHUB',
        'username' => 'GITHUB_da_Roça',
        'text' => 'test de texto de post 3ASDASDASD',
        'link' => 'https://www.youtube.com/embed/pMdlF4rbf6Y'

      ],
    ];

    return $posts;
  }

  public function frontend($posts)
  {
    $data['newPost'] = view('templates/newPost');
    $data['filterFeed'] = view('templates/filterFeed');
    $data['posts'] = view('templates/post', ['posts' => $posts]);

    echo view('templates/html_header');
    echo view('templates/navbar');
    echo view('Home', [
      'newPost' => $data['newPost'],
      'filterFeed' => $data['filterFeed'],
      'postList' => $data['posts']
    ]);
    echo view('templates/footer');
  }


  public function logout()
  {
    session()->destroy();
    header("Location: ../Login");
    die();
  }

  public function isntLoggedIn()
  {
    if (!session()->has('name')) {
      header("Location: Login");
      die();
    }
  }
}
