<?php

$leaderName = $_REQUEST['leaderName'];
echo '$leaderName = '.$leaderName.'<br/>';

$leaderName = $_POST['leaderName'];
echo '$leaderName = '.$leaderName.'<br/>';

print_r($_POST);

print_r($_FILES);

print_r($_GET);

print_r($_REQUEST);

print_r($_SERVER);

print_r($_SESSION);

