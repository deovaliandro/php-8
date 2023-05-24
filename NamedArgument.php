<?php

function sayMyName(string $firstName, string $middleName = "", string $lastName):
void
{
    echo "yoooo whattssupp $firstName $lastName, can i call u $middleName" . PHP_EOL;
}

// not error
sayMyName("John", "Doe", "Mr");
sayMyName(firstName: "John", middleName: "Doe", lastName: "Mr");
sayMyName(firstName: "John", lastName: "Mr");

// error
// sayMyName("John", "Doe");