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
	$sqlString = "UPDATE Customer SET Cust_Fname='".$_POST["CustomerFname"] ."', Cust_Lname='" .$_POST["CustomerLname"] ."',Cust_Password='".$_POST["CustomerPassword"] ."',Cust_email='".$_POST["CustomerEmail"]
	."',Cust_address='" .$_POST["CustomerAddress"] ."',Cust_city='" .$_POST["CustomerCity"] ."',Cust_state='" .$_POST["CustomerState"] ."',Cust_zip='" .$_POST["CustomerZip"] ."',Locked_flag='" .$_POST["LockedFlag"] ."',Emp_ID='" .$_POST["EmployeeID"] ."'  WHERE Cust_ID = '".$_POST["CustomerID"]."'";
	
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
		<title> SA_CustomerEditAction </title>
	</head>
	<body bgcolor="#bbccaa">
		<br/>
		<br/>
		<br/>
		<center>
			<h3><?php  echo($result); ?></h3>
			<br/>
			<a href="SA_Customers.php">Back to the Main Page</a>
		</center>
	</body>
</html>
