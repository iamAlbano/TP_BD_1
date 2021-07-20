<?php

namespace App\Libraries;

class User
{

  private $id;
  private $email;
  private $first_name;
  private $last_name;
  private $username;
  private $pass;

  public function __set($property, $value)
  {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }


  public function __get($property)
  {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __construct($id, $email, $first_name, $last_name, $login, $password_)
  {
    $this->__set('id', $id);
    $this->__set('email', $email);
    $this->__set('first_name', $first_name);
    $this->__set('last_name', $last_name);
    $this->__set('login', $login);
    $this->__set('password_', $password_);
  }
}
