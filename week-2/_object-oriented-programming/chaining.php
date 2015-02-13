<?php


class Chain
{
    public function sayHello($name)
    {
        echo 'Hello ' . $name . '<br/>';
        return $this;
    }


    public function sayFoo()
    {

        echo 'Foo';
        return $this;
    }

    public function sayBarr()
    {
        echo 'Bar';
        return $this;
    }

    public function sayBax()
    {
        return null;
    }
}

$myChain = new Chain();

//$myChain->sayBarr()->sayHello('Ken')->sayBax()->sayFoo();


class Foo{

}


if($myChain instanceof Chain){

    echo 'Yeah its an instance of Chain';
}else{
    echo 'Nope its not';
}























