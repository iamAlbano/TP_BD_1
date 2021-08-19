<?php

namespace App\Controllers;

use Config\Database as DB;
use DOMDocument;

class Home extends BaseController
{

  public function index()
  {

    echo view('templates/html_header');
    $this->navbar();
    $this->frontend($posts = $this->posts('date'));
  }



  public function filter_feed($filter = NULL) {
    if(isset($_GET['filter'])) {
      $filter = $_GET['filter'];

      if ($filter == 'hot') {
        echo view('templates/html_header');
        $this->navbar();
        $this->frontend($posts = $this->posts('comments'));
      }else {
        if($filter == 'category' and isset($_GET['cat'])){
          $category = $_GET['cat'];
          echo view('templates/html_header');
          $this->navbar();
          $this->frontend($posts = $this->posts($category));

        }
      }
    }

    //header("Location: ../Home");
    //die();
  }

  public function get_post_preview($text) {

    $preventText = $text;
    
    $preventText = \str_replace("<figure ","<a ",  $preventText);
    $preventText = \str_replace( "</figure>","</a>",  $preventText);

    $preventText = \str_replace("<figcaption>","<i>",  $preventText);
    $preventText = \str_replace( "</figcaption>","</i>",  $preventText);
    $dom = new DOMDocument();


    
    $dom->loadHTML($preventText);
    $links = array();
    $searchVideo = $dom->getElementsByTagName('div');
    foreach ($searchVideo as $video) {
      $iframe_ = $video->getElementsByTagName('iframe');
      foreach ($iframe_ as $link)
      $links [] = $link->getAttribute('src');

    }

    $dom = new DOMDocument();
    @$dom->loadHTML($preventText);
    $elements = $dom->getElementsByTagName("div");
    for ($i = $elements->length - 1; $i>=0; $i--){
      $nodeDiv = $elements->item($i);
      
      $nodeIframe = $dom->createElement("iframe");
      $width = $dom->createAttribute('width');
      $height = $dom->createAttribute('height');
      $src = $dom->createAttribute('src');
      
      $width->value = 620;
      $height->value = 415;
      $src->value = $links[$i];

      $nodeIframe->appendChild($width);
      $nodeIframe->appendChild($height);
      $nodeIframe->appendChild($src);
      
      $row_post_section = $dom->createElement("div");
      $row_post_section_class = $dom->createAttribute("class");
      $row_post_section_class->value = "row new-post-section-row";
      $row_post_section->appendChild($row_post_section_class);

      $div_mediaLink = $dom->createElement("div");
      $div_mediaLink_class = $dom->createAttribute("class");
      $div_mediaLink_class->value = "col-9 media-link";
      $div_mediaLink->appendChild($div_mediaLink_class);

      $row_iframe = $dom->createElement("div");
      $row_iframe_class = $dom->createAttribute("class");
      $row_iframe_class->value = "row new-post-section-row";
      $row_iframe->appendChild($row_iframe_class);

      $row_iframe->appendChild($nodeIframe);
      $div_mediaLink->appendChild($row_iframe);
      $row_post_section->appendChild($div_mediaLink);
      
      $nodeDiv->parentNode->replaceChild($row_post_section, $nodeDiv);

    }
    
    $preventText = $dom->saveHTML();
    $preventText = \str_replace("<a ", "<figure ", $preventText);
    $preventText = \str_replace("</a>", "</figure>",  $preventText);

    $preventText = \str_replace("<i>","<figcaption>",  $preventText);
    $preventText = \str_replace( "</i>","</figcaption>",  $preventText);
    
    return $preventText;
  
    #return " testando lalal";
  }



  public function posts($filter)
  {
    $category = '';
    if ($filter != 'comments' AND $filter != 'date' ){
      $category = 'AND P.`category`= "' . $filter .'"';
      $filter = 'date';
    }


    $db = DB::connect();
    $query = $db->query('SELECT U.`id`, U.`first_name`, U.`last_name`, U.`username`, P.*,  COUNT( C.`id_post`) AS comments
    FROM `tb_user` U, `tb_post` P LEFT JOIN `tb_comment` C ON P.`id`=C.`id_post`
    WHERE U.`id`=P.`id_user` '.$category.' 
    GROUP BY P.`id`
    ORDER BY '.$filter.' DESC');

    $posts = array();
    if ($query) {
      foreach ($query->getResultObject('App\Libraries\Post') as $row) {
        
        $post = [
          'id' => $row->id,
          'id_user' => $row->id_user,
          'name' => $row->first_name . " " . $row->last_name,
          'username' => $row->username,
          'title' => $row->title,
          'comments' => $row->comments,
          'date' => $row->date,
          'text' => $this->get_post_preview($row->text),
          'category' => $row->category
        ];        
        $posts[] = $post;
      }
    }
    
    return $posts;
  }

  public function frontend($posts)
  {
    if($this->isLoggedIn()){
      $data['newPost'] = view('templates/newPost');
    } else {
      $data['newPost'] = view('templates/JoinUs');
    }

    $data['filterFeed'] = view('templates/filterFeed');
    $data['posts'] = view('templates/post', ['posts' => $posts]);

    echo view('Home', [
      'newPost' => $data['newPost'],
      'filterFeed' => $data['filterFeed'],
      'postList' => $data['posts']
    ]);

    echo view('templates/footer');
   
  }

  public function navbar(){
    if($this->isLoggedIn()){
      echo view('templates/navbar');
    } else {
      echo view('templates/navbarLogOut');
    }
  }

  public function logout()
  {
    session()->destroy();
    header("Location: ../Home");
    die();
  }

  public function isLoggedIn()
  {
    if (session()->has('name')) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
