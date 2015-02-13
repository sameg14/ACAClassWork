<?php

class Person
{
    public $name;

    public $gender;

    public $age = 'unknown';

    public $socialSec;


    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }


    public function sayHello()
    {
        echo 'Hello ' . $this->name.' you are '.$this->age.' years old!<br/>';
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSocialSec()
    {
        return $this->socialSec;
    }

    /**
     * @param mixed $socialSec
     */
    public function setSocialSec($socialSec)
    {
        $this->socialSec = $socialSec;
    }


}


// Where i Instantiate the class into an object

echo '<pre>';
$person1 = new Person('Brian', 'M');
$person1->setAge('23');
$person1->sayHello();

$person2 = new Person('Ken', 'M');
$person2->setAge('12');
$person2->sayHello();

$person3 = new Person('Joseph', "M");
$person3->sayHello();