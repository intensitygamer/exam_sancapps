<?php 

include 'connect.php';

$first_name = $_POST['first_name'];
$last_name 	= $_POST['last_name'];
$position 	= $_POST['position'];
$address 	= $_POST['address'];
$status 	= $_POST['status'];

mysqli_query($con, "INSERT INTO employee(firstname, lastname, position, address, status) VALUES('$first_name', '$last_name', '$position', '$address', '$status') ") or die(mysqli_error($con));

header("Location: list_employees.php");


?>