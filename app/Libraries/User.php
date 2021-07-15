<?php

namespace App\Libraries;

class User{

    private $id;
    private $email;
    private $name;
    private $lastname;
    private $username;
    private $pass;

    public function __set($property, $value){
        if (property_exists($this, $property)){
        $this->$property = $value;  }
    }

    public function __get($property){
        if (property_exists($this, $property)){
            return $this->$property;  }
    }
    public function __construct($email, $name, $lastname, $username, $pass){
        $this->__set('email', $email);
        $this->__set('name', $name);
        $this->__set('lastname', $lastname);
        $this->__set('username', $username);
        $this->__set('pass', $pass);
        
    }




}