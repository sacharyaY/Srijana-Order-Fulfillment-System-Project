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
	$sqlString = $sqlString = "SELECT Cust_ID, Cust_Fname, Cust_Lname, Cust_Password, Cust_email, Cust_address, Cust_city, Cust_state, Cust_zip, Locked_flag, Emp_ID FROM  Customer WHERE Cust_ID = '".$_GET["cid"] ."'";
	
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
    	<title> SA_CustomerEditForm.php</title>
    </head>
    <body bgcolor="#bbccaa">
		<br/><br/>
		<br/><br/>
		<center>
		<table border="2" width="400">
		<form method="post" action="SA_CustomerEditAction.php">
			<tr bgcolor=#88ccaa>
				<th  colspan=5>
					<h3>Update Customer <?php echo($_GET["cid"]);?></h3>
				</th>
			</tr>
			
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Fname
				</td>
				<td align=align=left>
					<input type="text" size="10" name="CustomerFname" value="<?php echo($row["Cust_Fname"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Lname
				</td>
				<td align=align=left>
					<input type="text" size="12" name="CustomerLname" value="<?php echo($row["Cust_Lname"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Password
				</td>
				<td align=align=left>
					<input type="text" size="8" name="CustomerPassword" value="<?php echo($row["Cust_Password"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Email
				</td>
				<td align=align=left>
					<input type="text" size="15" name="CustomerEmail" value="<?php echo($row["Cust_email"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Address
				</td>
				<td align=align=left>
					<input type="text" size="15" name="CustomerAddress" value="<?php echo($row["Cust_address"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer City
				</td>
				<td align=align=left>
					<input type="text" size="15" name="CustomerCity" value="<?php echo($row["Cust_city"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer State
				</td>
				<td align=align=left>
					<input type="text" size="15" name="CustomerState" value="<?php echo($row["Cust_state"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer ZipCode
				</td>
				<td align=align=left>
					<input type="text" size="15" name="CustomerZip" value="<?php echo($row["Cust_zip"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Locked Flag
				</td>
				<td align=align=left>
					<input type="text" size="15" name="LockedFlag" value="<?php echo($row["Locked_flag"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee ID
				</td>
				<td align=align=left>
					<input type="text" size="15" name="EmployeeID" value="<?php echo($row["Emp_ID"]); ?>">
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
					<input type = "hidden" name = "CustomerID" value="<?php echo($_GET["cid"]); ?>">
				</td>
				<td>
				</td>
			</tr>
		</form>
		</table>
		<a href="SA_Customers.php">Back to the Main Page</a>
		</center>
	</body>
</html>
