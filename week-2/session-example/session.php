<?php

session_start();

// A form was posted
if (!empty($_POST)) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = 1;
}

if (isset($_SESSION['logged_in'])) {
    echo 'Welcome to the member\'s area ' . $_SESSION['username'];
} else {

    echo '<form name="loginForm" action="' . $_SERVER['PHP_SELF'] . '" method="post">
        Username: <input type="text" name="username" size="12"/>
        <input type="submit" value="Login"/>
    </form>';

}