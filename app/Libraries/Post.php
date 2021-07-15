<?php

namespace App\Libraries;

class Post{

    private $id;
    private $id_user;
    private $date;
    private $title;
    private $text;
    private $category;
    

    
    public function __set($property, $value){
        if (property_exists($this, $property)){
            $this->$property = $value;  }
            return $this;
        }
        
        public function __get($property){
            if (property_exists($this, $property)){
                return $this->$property;  }
            }
            
            
            public function __construct($id_user, $date, $title, $text, $category){
                $this->__set('id_user', $id_user);
                $this->__set('date', $date);
                $this->__set('title', $title);
                $this->__set('text', $text);
                $this->__set('category', $category);
            }

}