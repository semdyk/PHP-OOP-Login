<?php

class User
{
    private $username;
    private $passwordHash;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->passwordHash = password_hash($password, PASSWORD_BCRYPT);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }
}
