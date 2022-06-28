<?php

class login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->login = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenhalogin($senha){
        $this->senha = $senha;
    }
}