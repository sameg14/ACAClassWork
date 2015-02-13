<?php

/**
 * Class Animal
 */
class Animal
{
    /**
     * Name of the animal
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    private $species = 'Mammal';

    /**
     * @var string
     */
    public $gender;

    /**
     * Does this creature have fur?
     * @var bool
     */
    protected $hasFur = false;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param string $species
     */
    public function setSpecies($species)
    {
        $this->species = $species;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param boolean $hasFur
     */
    public function setHasFur($hasFur)
    {
        $this->hasFur = $hasFur;
    }
}


class Giraffe extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function identify()
    {
        // Species cannot be accessed because its private
        //echo $this->name . ' is a ' . $this->species;
    }
}

//
//// Outside my class, typically in a different file.
//
//$myAnimal = new Animal(); // Where you instantiate the class into an object
//$myAnimal->setName('Giraffe'); // setting a value on the public property `name`
//$myAnimal->setHasFur(true);
//
//echo 'I am a: '.$myAnimal->getName();
//echo $myAnimal->hasFur ? ' and I am furry' : ' and I am not furry';


$myGiraffe = new Giraffe('Pumba');
//$myGiraffe->setName('Pumba');
$myGiraffe->identify();
//echo '<pre>';
//print_r($myGiraffe);
