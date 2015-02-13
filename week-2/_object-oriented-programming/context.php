<?php

// error_reporting(E_ALL);

class Foo
{
    const BAR = 'fubar';

    const NUM_COUNTRIES_ON_EARTH = 193;


    public $name;

    public function displayConstant()
    {
        echo self::BAR;
    }


    public static function oneOff()
    {
        // Dont have access to $this
        // $this->name; // is illegal

        echo 'One off function';
    }
}


Foo::oneOff();


//echo Foo::NUM_COUNTRIES_ON_EARTH;