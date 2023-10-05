<?php
class User{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    function __construct($id,$firstname,$lastname,$email,$password){
       $this->id = $id;
       $this->firstname = $firstname;
       $this->lastname = $lastname;
       $this->email = $email;
       $this->password = $password;
    }

    function getId(){
        return $this->id;
    }
    function getFirstname(){
        return $this->firstname;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
}



?>