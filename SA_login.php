<?php	
    // Establish a connection to the database
	$con =  mysqli_connect("localhost", "root", "");
	
	if ( mysqli_connect_errno() != 0) 
	{
	   die("An error occurred trying to establish a connection: " .mysqli_connect_error());
	}
	
	// Select the  database to work with.
	$db  =  mysqli_select_db ($con , "PHPproject");
	
	// Check if there were any issues connecting to the database
	if (isset($_POST['submit'])) {	
	
		$query = "SELECT * FROM Employee WHERE Emp_ID='".mysqli_real_escape_string($con, $_POST['Emp_ID'])."'AND 
		Emp_Password='".mysqli_real_escape_string($con, $_POST['Emp_Password'])."'LIMIT 1";

		$result = mysqli_query($con, $query);
		
		$row = mysqli_fetch_array($result);
		
		if($row){
		
			$_SESSION['id']=$row['id'];
			
			header("Location:SA_success.php");
		
		} else {
			
			header("Location:SA_failure.php");
		}
	}
	// Close the connection
	mysqli_close($con);

	?>
<!DOCTYPE html>
<html>
	<head> 
	   <title> SA_login.php </title>
			</head>
						<body bgcolor="#bbccaa">
						<h3 align="center">Log In Page</h3>
						<form action = "SA_login.php" method = "POST" align="center">
						Employee ID:<br>
						<input type="text" name="Emp_ID"  ><br>
						Employee Password:<br>
						<input type="password" name="Emp_Password"  ><br><br>
						<input type="submit" name = "submit" value="Submit">
						</form>
    
						</body>
</html>