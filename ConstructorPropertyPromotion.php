<?php

class Person
{
    public function __construct(
        public string $name,
        public string $address,
        public string $parents,
        public int    $age = 0
    )
    {
    }
}

$deo = new Person("John", "Chicago", "Mr and Mrs", 25);
var_dump($deo);