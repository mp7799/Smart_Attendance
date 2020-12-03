<?php

$user = 'root';
$password = '';
$db = 'attendance';

$link = new mysqli('localhost', $user, $password, $db, '3325') or die('Unable to connect');

$reg_num = mysqli_real_escape_string($link, $_REQUEST['reg_num']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$subject_name = mysqli_real_escape_string($link, $_REQUEST['subject_name']);
$slot_name = mysqli_real_escape_string($link, $_REQUEST['slot_name']);

$sql = "INSERT INTO record (reg_no, first_name, last_name, subject_name, slot_name) VALUES ('$reg_num', '$first_name', '$last_name', '$subject_name', '$slot_name')";

if(mysqli_query($link, $sql)){
    echo "<h1> Data Successfull Inserted</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}