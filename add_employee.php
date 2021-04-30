<form action="insert_employee.php" method="POST">

<table>

	<tr><td>First Name:	<td> <input type="text" name="first_name">
	<tr><td>Last Name:	<td> <input type="text" name="last_name">
	<tr><td>Position: 	<td> <input type="text" name="position">
	<tr><td>Address:	<td> <input type="text" name="address">
	<tr><td>Status:		<td> <select name="status"> 
								<option value="active">Active</option>
								<option value="inactive">Inactive</option>
								</select>

</table>

<input type="submit" name=""  value="Add Employee" /> 

</form>