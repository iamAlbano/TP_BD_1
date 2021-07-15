<?php

namespace App\Libraries;

class Post{

    private $id;
    private $id_user;
    private $id_post;
    private $text;
    

    
    public function __set($property, $value){
        if (property_exists($this, $property)){
            $this->$property = $value;  }
            return $this;
        }
        
    public function __get($property){
        if (property_exists($this, $property)){
            return $this->$property;  }
            }
            
    public function __construct($id_user, $id_post, $text){
            $this->__set('id_user', $id_user);
            $this->__set('id_post', $id_post);
            $this->__set('text', $text);
                
            }


}