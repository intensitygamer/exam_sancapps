<?php include 'connect.php'; ?>

<h2> Employees Attendance Record </h2>

<table >

<tr>
	<td>Time In
	<td>Time In Date
	<td>Time Out 
	<td>Time Out Date
	<td>Created At

	<?php 

	$emp_id = $_GET['emp_id'];

	$employees_attendance_query = mysqli_query($con, "SELECT * FROM attendance WHERE e_id = '$emp_id' ");

	while($row = mysqli_fetch_assoc($employees_attendance_query)){


	?>

		<tr>
			<td><?php echo $row['time_in']; ?>
			<td><?php echo $row['time_in_date']; ?>
			<td><?php echo $row['time_out']; ?>
			<td><?php echo $row['time_out_date']; ?>

	<?php } ?>