<?php

namespace KdG;

Class User
{
    private $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format");
        }
        $this->email = $email;
    }

    public function printUserDetails()
    {
        echo "{$this->name} ({$this->email})";
    }
}
