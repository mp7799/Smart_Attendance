<?php

$user = 'root';
$password = '';
$db = 'attendance';

$link = new mysqli('localhost', $user, $password, $db, '3325') or die('Unable to connect');

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "select * from registration where username='$email' and password='$password'";
$data = mysqli_query($link, $sql);

if($data->num_rows > 0){
    header('Location: record.html');
} else{
    echo "<h1> Invalid Login Data </h1>";
}