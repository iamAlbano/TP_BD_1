<?php


namespace App\Controllers;

use config\Database as DB;
use DOMDocument;
class Post extends BaseController
{
  public function get_post_text($text) {

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


  public function get_post($id){
    $db = DB::connect();
    $query =$db->query('SELECT U.`id`, U.`first_name`, U.`last_name`, U.`username`, P.* 
      FROM `tb_user` U, `tb_post` P
      WHERE P.`id`=' .$id .' AND U.`id`=P.`id_user`');

    if ($query->getResultObject('App\Libraries\Post')) {
      #$query =  $query->getResultObject('App\Libraries\Post');
      $post = $query->getResultObject('App\Libraries\Post');
      $post[0]->text = $this->get_post_text($post[0]->text);
      return $post[0];
    
    }else {
    
      header("Location: ./Home");
      die();
    }
  }


  public function index($id=  NULL)
  {

    if($_GET['id']) {
      $id = $_GET['id'];
      echo view('templates/html_header');
      echo view('templates/navbar');
      echo view('templates/postPage/postPage', [
        'postContent' => view('templates/postPage/postContent', ['post' =>$this->get_post($id)]),
        'commentForm' => view('templates/postPage/commentForm'),
        'commentList' => view('templates/postPage/commentList')
      ]);
      echo view('templates/footer');
    }
  }

}

