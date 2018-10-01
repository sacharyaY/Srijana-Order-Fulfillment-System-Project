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
	$sqlString = "SELECT Emp_ID, Emp_Fname, Emp_Lname, Emp_Password, Emp_email FROM Employee";
	
	// Run the query using the connection established earlier and assign the results to a results object.
	$rs = mysqli_query ($con  , $sqlString);
	
	
?>
<!DOCTYPE html>
<html>
	<head> 
	
    	<title> SA_Employees.php </title>
	</head>
	<body bgcolor="#bbccaa">
	<?php include ("SA_menu.php"); ?>
		<br/><br/><br/><br/>
		<center>
		<table border="2" width="500">
			<tr bgcolor=#88ccaa>
				<th  colspan=7>
					<h3>Employees List</h3>
				</th>
			<tr bgcolor=#88ccaa>
				<th align=center>
					Employee ID
				</th>
				<th align=center>
					Employee Fname
				</th>
				<th align=center>
				 Employee Lname
				</th>
				<th align=center>
				Employee Password
				</th>
			     <th align=center>
			          Employee Email
				     </th>
				
				      <th></th>
				      <th></th>
			         </tr>

		<?php
			// While there is another record in the result object, fetch it
			while ($row = mysqli_fetch_array ($rs))
			{
				echo("<tr bgcolor=#88ccaa><td align=center>");
				echo($row["Emp_ID"]);
				echo("</td><td>");
				echo($row["Emp_Fname"]);
				echo("</td><td>");
				echo($row["Emp_Lname"]);
                echo("</td><td>");
				echo($row["Emp_Password"]);	
                echo("</td><td>");
				echo($row["Emp_email"]);
				 
		?>
				</td>
				<td>
					<a href=SA_EmployeeEditForm.php?eid=<?php echo($row["Emp_ID"]); ?>>Edit</a>
				</td>
				<td>
					<a href=SA_EmployeeDelete.php?eid=<?php echo($row["Emp_ID"]); ?>>Delete</a>
				</td>
			</tr>
		<?php  
		    } 			
			// Destroy the result object and release its memory
			mysqli_free_result($rs);
				
			// Close the connection
			mysqli_close($con);		
		?>
			<tr bgcolor=#88ccaa>
				<td align=center colspan=7>
					<a href="SA_EmployeeAddForm.php">Add New Employee</a>
				</td>
			</tr>
		</table>
		</center>
	</body>
</html>

