<?php

class User {
    public $nickname;
    public $password;
    public $email;

    function setPass($password){
        $this->password = $password;
    }

    public function __construct(string $nickname = null, string $password = null, string $email = null){
        $this->nickname = $nickname;
        $this->password = $password;
        $this->email = $email;
    }
}