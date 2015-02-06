<?php

// Another example of by ref

$students = array(
    'Joseph',
    'Brian',
    'Ken'
);

// array_push($students, 'Samir');

function addStudent(&$students, $student)
{
    $students[] = $student;
}

addStudent($students, 'Samir');
print_r($students);


// Counts the number of students in class
$numStudents = 3;

function addByRef(&$num)
{
    $num = $num + 1;
}
addByRef($numStudents);
echo 'Num students after by ref: ' . $numStudents . PHP_EOL;

function addStudentByVal($num){
    $num = $num + 1;
    return $num;
}

$numStudents = addStudentByVal($numStudents);
echo '$numStudents = '.$numStudents.PHP_EOL;