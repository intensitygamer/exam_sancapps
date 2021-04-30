<?php 

 	require 'connect.php';
 	
	$emp_id 			= $_GET['emp_id'];

	mysqli_query($con, "UPDATE employee 

		SET status = 'active'

	 WHERE id = '$emp_id' ");


	header("Location: list_employees.php");
