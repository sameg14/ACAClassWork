<?php

abstract class HTTP
{
    protected function getData()
    {
        return 'Get the headers';
    }
}


class Varnish extends HTTP
{
    public function getData()
    {
        $parentHeaders = parent::getData();

        return $parentHeaders. ' Varnish data';
    }
}

class Apache extends HTTP
{
    public function getData()
    {
        return 'Apache data';
    }
}

$myApache = new Apache();
echo $myApache->getData();
echo '<br/>';
$myVarnish = new Varnish();
echo $myVarnish->getData();