<?php

$user = 'root';
$password = '';
$db = 'attendance';

$link = new mysqli('localhost', $user, $password, $db, '3325') or die('Unable to connect');

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "INSERT INTO registration (username, password) VALUES ('$email', '$password')";

if(mysqli_query($link, $sql)){
    header('Location: login.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}