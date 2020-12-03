<?php

$user = 'root';
$password = '';
$db = 'attendance';

$link = new mysqli('localhost', $user, $password, $db, '3325') or die('Unable to connect');
?>

<html lang="">
<head>
    <title> Home </title>
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="script.js"></script>
</head>

<body >
    <br />
    <div class="taskbar">
        <ul>
            <li class="home"> <a class="text-dark" href="index.html"> Home </a> </li>
            <li> <a class="text-dark" href="record.html"> Mark Attendance </a> </li>
            <li> <a class="text-dark" href="studentRecords.html"> Records </a> </li>
            <li> <a class="text-dark" href="query.html"> File Query </a> </li>
            <li> <a class="text-dark" href="login.html"> Login </a> </li>
            <li> <a class="text-dark" href="register.html"> Register </a> </li>
        </ul>
    </div>
    


    <?php
    $fetch_data = "select * from record";
    $data = mysqli_query($link, $fetch_data);

	    while($row = $data->fetch_assoc()){
	    	echo '<div>
			    <div>
			    	<h2 class="text-dark d-flex justify-content-center"> ' . $row['first_name'] . '</h2>
			    </div>
			    <div>
			    	<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">S No</th>
					      <th scope="col">Input Field</th>
					      <th scope="col">Information</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Registration Number</td>
					      <td> '. $row['reg_no'] .'</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>First name</td>
					      <td>' . $row['first_name'] . '</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Last name</td>
					      <td>' . $row['last_name'] . '</td>
					    </tr>
					    <tr>
					      <th scope="row">4</th>
					      <td>Subject name</td>
					      <td>' . $row['subject_name'] . '</td>
					    </tr>
					    <tr>
					      <th scope="row">5</th>
					      <td>Slot Marked</td>
					      <td>' . $row['slot_name'] . '</td>
					    </tr>
					  </tbody>
					</table>
			    </div>
			</div>';
	    }
    ?>
</body>
</html>