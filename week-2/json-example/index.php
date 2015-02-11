<?php


$contents = file_get_contents('http://restcountries.eu/rest/v1/name/Mongolia');


$arr = json_decode($contents);


$arr = (array) $arr[0];

print_r($arr);


//echo $arr->name;

die();

echo'<pre>';
print_r($arr);