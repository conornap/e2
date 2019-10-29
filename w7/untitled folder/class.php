<?php

class Person
{
    var $firstName;
    var $lastName;
    var $age;

    // Declare a method.
    function getFullName()
    {
        // Echo properties.
        echo $person->firstName . PHP_EOL;
        echo $person->lastName . PHP_EOL;
        echo $person->age . PHP_EOL; 
    }

}

// Create a new Person instance.
$person = new Person;

// Set properties.
$person->firstName = 'conor';
$person->lastName = 'napier';
$person->age = '33';

// Output a persons full name.
$person->getFullName();

