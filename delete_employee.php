<?php 

	require 'connect.php';

	$emp_id 			= $_GET['emp_id'];

	mysqli_query($con, "DELETE FROM employee WHERE id = '$emp_id' ") or die(mysqli_error($con));

 	header("Location: list_employees.php");