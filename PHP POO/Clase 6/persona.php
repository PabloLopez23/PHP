<?php

class Person 
{
    public function greet ()
    {
        return 'hola $this->$name';
    }
}

class User 
{
    public $type; 
}

class Admin extends Person
{
    public $name = 'Administrador';
}

$user = new User;
$user->type = new Admin;
echo $user->type->greet(); 