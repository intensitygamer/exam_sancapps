<?php include 'connect.php'; ?>

<table >

<tr>
	<td>First Name
	<td>Last Name
	<td>Position
	<td>Address
	<td>Status

	<?php 

	$first_name			= $_POST['first_name'];

	$last_name 			= $_POST['last_name'];

	$position 			= $_POST['position'];

	$employees_query = mysqli_query($con, "SELECT *  FROM employee 

					WHERE lastname LIKE '%$last_name%' 
					OR  firstname LIKE '%first_name%' 
 					OR 	position LIKE '%position%'
	");

 	while($row = mysqli_fetch_assoc($employees_query) ){ ?>

		<tr>
			<td><?php echo $row['firstname']; ?>
			<td><?php echo $row['lastname']; ?>
			<td><?php echo $row['position']; ?>
			<td><?php echo $row['address']; ?>
			<td><?php echo $row['status']; ?>
			<td>
				<a href="update_employee_form.php?emp_id=<?php echo $row['id']; ?>"> Update </a>
				<a href="delete_employee.php?emp_id=<?php echo $row['id']; ?>"> Delete </a>
				
				<?php if($row['status'] == 'active'){?>

					<a href="deactivate_employee.php?emp_id=<?php echo $row['id']; ?>"> Deactive </a>
				
				<?php } ?>

				<?php if($row['status'] == 'inactive'){?>

					<a href="activate_employee.php?emp_id=<?php echo $row['id']; ?>"> Activate </a>
				
				<?php } ?>

				<a href="attendance_record.php?emp_id=<?php echo $row['id']; ?>"> View Attendance </a>

	<?php } ?>

</table>