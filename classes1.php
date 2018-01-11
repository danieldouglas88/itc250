<?php 
//classes1.php

$myPerson = new Person();
echo $myPerson->age;

class Person{
    
    public $firstName = '';
    public $lastName = '';
    public $age = 0;
    
}