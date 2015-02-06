<?php

$countArray = array(
    'num_numeric' => 0, 'num_string' => 0, 'num_bool' => 0
);


$countArray['num_bool'] = 12;

$countArray['num_bool']++;


echo '<pre>';
print_r($countArray);