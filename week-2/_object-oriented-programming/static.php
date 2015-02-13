<?php


class TooMuchStatic
{
    public static $shouldIFoo;

    public function doSomeWork()
    {
        if(self::$shouldIFoo){
            echo 'Yeah I will work';
        }else{
            echo 'No i will not work';
        }

        echo '<br/>';
    }
}


TooMuchStatic::$shouldIFoo = true;
$myStatic = new TooMuchStatic();
$myStatic->doSomeWork();


TooMuchStatic::$shouldIFoo = false;
$anotherStatic = new TooMuchStatic();
$anotherStatic->doSomeWork();