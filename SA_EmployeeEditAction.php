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
	$sqlString = "UPDATE Employee SET Emp_Fname='".$_POST["EmployeeFname"] ."', Emp_Lname='" .$_POST["EmployeeLname"] ."',Emp_Password='".$_POST["EmployeePassword"] ."',Emp_email='".$_POST["EmployeeEmail"] ."' WHERE EMP_ID = '".$_POST["EmployeeID"]."'";
	
	// Run the query using the connection established earlier and assign the results to a results object.
	$rs = mysqli_query ($con  , $sqlString);
	
		
	// Check if update was successful by checking whether the result returned is True
	if ( !$rs)
	{
		$result =  "There Was an Error Updating the Record".mysqli_error();
	}
	else
	{
		$result =  "Record Updated Successfully";
	}
	
	// Close the connection
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
	<head>
		<title> SA_EmployeeEditAction </title>
	</head>
	<body bgcolor="#bbccaa">
		<br/>
		<br/>
		<br/>
		<center>
			<h3><?php  echo($result); ?></h3>
			<br/>
			<a href="SA_Employees.php">Back to the Main Page</a>
		</center>
	</body>
</html>
