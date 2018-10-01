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
	$sqlString = "SELECT Cust_ID, Cust_Fname, Cust_Lname, Cust_Password, Cust_email, Cust_address, Cust_city, Cust_state, Cust_zip, Locked_flag, Emp_ID FROM Customer";
	
	// Run the query using the connection established earlier and assign the results to a results object.
	$rs = mysqli_query ($con  , $sqlString);
?>
<!DOCTYPE html>
<html>
	<head>
    	<title> SA_Customers.php </title>
	</head>
	<body bgcolor="#bbccaa">
	<?php include ("SA_menu.php"); ?>
		<br/><br/><br/><br/>
		<center>
		<table border="2" width="500">
			<tr bgcolor=#88ccaa>
				<th  colspan=13>
					<h3>Customers List</h3>
				</th>
			<tr bgcolor=#88ccaa>
				<th align=center>
					Customer ID
				</th>
				<th align=center>
					Customer Fname
				</th>
				<th align=center>
				 Customer Lname
				</th>
				<th align=center>
				Customer Password
				</th>
			     <th align=center>
			          Customer Email
				     </th>
					 <th align=center>
			          Customer Address
				     </th>
				<th align=center>
			          Customer City
				     </th>
					 <th align=center>
			          Customer State
				     </th>
					 <th align=center>
			          Customer ZipCode
				     </th>
					 <th align=center>
			          Locked Flag
				     </th>
					 <th align=center>
			          Employee ID
				     </th>
				      <th></th>
				      <th></th>
			         </tr>

		<?php
			// While there is another record in the result object, fetch it
			while ($row = mysqli_fetch_array ($rs))
			{
				echo("<tr bgcolor=#88ccaa><td align=center>");
				echo($row["Cust_ID"]);
				echo("</td><td>");
				echo($row["Cust_Fname"]);
				echo("</td><td>");
				echo($row["Cust_Lname"]);
                echo("</td><td>");
				echo($row["Cust_Password"]);	
                echo("</td><td>");
				echo($row["Cust_email"]);
				echo("</td><td>");
				echo($row["Cust_address"]);
				echo("</td><td>");
				echo($row["Cust_city"]);
				echo("</td><td>");
				echo($row["Cust_state"]);
				echo("</td><td>");
				echo($row["Cust_zip"]);
				echo("</td><td>");
				echo($row["Locked_flag"]);
				echo("</td><td>");
				echo($row["Emp_ID"]);
				
				 
		?>
				</td>
				<td>
					<a href=SA_CustomerEditForm.php?cid=<?php echo($row["Cust_ID"]); ?>>Edit</a>
				</td>
				<td>
					<a href=SA_CustomerDelete.php?cid=<?php echo($row["Cust_ID"]); ?>>Delete</a>
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
				<td align=center colspan=13>
					<a href="SA_CustomerAddForm.php">Add New Customer</a>
				</td>
			</tr>
		</table>
		</center>
	</body>
</html>

