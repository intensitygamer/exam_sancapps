<form action="update_employee.php" method="POST">

<table>
	<?php 
	require 'connect.php';

	$emp_id 		= $_GET['emp_id'];

	$employees_query 	= mysqli_query($con, "SELECT * FROM employee WHERE id = '$emp_id' ");

	$employee_info 		= mysqli_fetch_assoc( $employees_query);

	 ?>

	<tr><td>First Name:	<td> <input type="text" name="first_name" value="<?php echo $employee_info['firstname']; ?>">
	<tr><td>Last Name:	<td> <input type="text" name="last_name" value="<?php echo $employee_info['lastname']; ?>">
	<tr><td>Position: 	<td> <input type="text" name="position" value="<?php echo $employee_info['address']; ?>">
	<tr><td>Address:	<td> <input type="text" name="address" value="<?php echo $employee_info['position']; ?>">
	<tr><td>Status:		<td><select name="status"> 
								<option value="active" <?php if ($employee_info['status'] == 'active') echo 'selected'; ?> >Active</option>
								<option value="inactive"  <?php if ($employee_info['status'] == 'inactive') echo 'selected'; ?>>Inactive</option>
								</select> 
 
 	<input type="hidden" name="emp_id" value="<?php echo $employee_info['id']; ?>">

</table>

<input type="submit" name="add_emp_submit"  value="Update Employee">

</form>