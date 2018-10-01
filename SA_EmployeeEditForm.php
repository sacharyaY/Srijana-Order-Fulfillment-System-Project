<?php
	// Establish a connection to the database
	$con =  mysqli_connect("localhost", "root", "");
	
	// Check if there were any issues connecting to the database
	if ( mysqli_connect_errno() != 0) 
	{
	   die("An error occurred trying to establish a connection: " .mysqli_connect_error());
	}
	
	// Select the  database to work with.
	$db  =  mysqli_select_db ($con , "PHPproject");

	// Specify the query to run
	$sqlString = $sqlString = "SELECT Emp_ID, Emp_Fname, Emp_Lname, Emp_Password, Emp_email FROM  Employee WHERE Emp_ID = '".$_GET["eid"] ."'";
	
	// Run the query using the connection established earlier and assign the results to a results object.
	$rs = mysqli_query ($con  , $sqlString);
	
	// Retrieve the record
	$row = mysqli_fetch_array ($rs);
	
	// Destroy the result object and release its memory
	mysqli_free_result($rs);
				
	// Close the connection
	mysqli_close($con);	
?>
<!DOCTYPE html>
<html>
	<head>
    	<title> SA_EmployeeEditForm.php</title>
    </head>
    <body bgcolor="#bbccaa">
		<br/><br/>
		<br/><br/>
		<center>
		<table border="2" width="400">
		<form method="post" action="SA_EmployeeEditAction.php">
			<tr bgcolor=#88ccaa>
				<th  colspan=5>
					<h3>Update Employee <?php echo($_GET["eid"]);?></h3>
				</th>
			</tr>
			
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Fname
				</td>
				<td align=align=left>
					<input type="text" size="10" name="EmployeeFname" value="<?php echo($row["Emp_Fname"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Lname
				</td>
				<td align=align=left>
					<input type="text" size="12" name="EmployeeLname" value="<?php echo($row["Emp_Lname"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Password
				</td>
				<td align=align=left>
					<input type="text" size="8" name="EmployeePassword" value="<?php echo($row["Emp_Password"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Email
				</td>
				<td align=align=left>
					<input type="text" size="15" name="EmployeeEmail" value="<?php echo($row["Emp_email"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=right>
					<input type="submit" value="Update Record">
				</td>
				<td align=left>
					<input type="reset"  value="Clear">
				</td>
			</tr>
			<tr>
				<td>
					<input type = "hidden" name = "EmployeeID" value="<?php echo($_GET["eid"]); ?>">
				</td>
				<td>
				</td>
			</tr>
		</form>
		</table>
		<a href="SA_Employees.php">Back to the Main Page</a>
		</center>
	</body>
</html>
