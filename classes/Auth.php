<?php

class Auth
{
    private $users = [];

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function login($username, $password)
    {
        foreach ($this->users as $user) {
            if ($user->getUsername() === $username && password_verify($password, $user->getPasswordHash())) {
                // Store only the username in the session
                $_SESSION['username'] = $username;
                return true;
            }
        }
        return false;
    }

    public function logout()
    {
        session_destroy();
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['username']);
    }
}
