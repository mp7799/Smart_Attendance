<?php

$user = 'root';
$password = '';
$db = 'books';

$link = new mysqli('localhost', $user, $password, $db, '3325') or die('Unable to connect');

$title = mysqli_real_escape_string($link, $_REQUEST['title']);

$sql = "SELECT * from books_data where title = '$title'";
$sql = mysqli_query($link, $sql);

if($sql->num_rows > 0){
	echo "<h1> Data Successfully found </h1>";
	while($row = $sql->fetch_assoc()){
		echo "<br/> Accession Number : " . $row['acc_num'] . "<br/>  Title : " . $row['title'] . "<br/>  Author Name is : " . $row['author_name'] . "<br/>  Edition is : " . $row['edition'] ."<br/> Publisher is : " . $row['publisher_name'] . "<br/>";
	}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}