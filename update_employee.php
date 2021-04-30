<?php 
	
	require 'connect.php';

	$emp_id 			= $_POST['emp_id'];

	$first_name			= $_POST['first_name'];

	$last_name 			= $_POST['last_name'];

	$position 			= $_POST['position'];

	$address 			= $_POST['address'];

	$status 			= $_POST['status'];


	mysqli_query($con, "UPDATE employee 

		SET lastname = '$last_name',
		firstname = '$first_name',
		position = '$position',
		address = '$address',
			status = '$status' 


	 WHERE id = '$emp_id' ");


	header("Location: list_employees.php");


?>