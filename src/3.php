<?php

$username = "user";
$password = "pass";

if(isset($_POST["login"])) {
    if($_POST["username"] === $username && $_POST["password"] === $password) {
        echo "Welcome, " . $username;
    } else {
        echo "Invalid username or password.";
    }
}

?>