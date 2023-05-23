<?php

function sayMyName(string $firstName, string $middleName = "", string $lastName):
void {
    echo "yoooo whattssupp $firstName $lastName, can i call u $middleName" . PHP_EOL;
}

// not error
sayMyName("Deo", "Deo", "Valiandro");
sayMyName(firstName: "Deo", middleName: "Deo", lastName: "Valiandro");
sayMyName(firstName: "Deo", lastName: "Valiandro");

// error
// sayMyName("Deo", "Valiandro");