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
	$sqlString = $sqlString = "SELECT ShipperID, CompanyName, Phone FROM  Shipper WHERE ShipperID = '".$_GET["sid"] ."'";
	
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
    	<title> ShipperEditForm.php</title>
    </head>
    <body bgcolor="#bbccaa">
		<br/><br/>
		<br/><br/>
		<center>
		<table border="2" width="400">
		<form method="post" action="ShipperEditAction.php">
			<tr bgcolor=#88ccaa>
				<th  colspan=5>
					<h3>Update Shipper <?php echo($_GET["sid"]);?></h3>
				</th>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Company Name
				</td>
				<td align= left>
					<input type = "text" size="30" name="CompanyName" value ="<?php  echo ($row["CompanyName"]); ?>">
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Phone
				</td>
				<td align=align=left>
					<input type="text" size="12" name="Phone" value="<?php echo($row["Phone"]); ?>">
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
					<input type = "hidden" name = "ID" value="<?php echo($_GET["sid"]); ?>">
				</td>
				<td>
				</td>
			</tr>
		</form>
		</table>
		<a href="Shippers.php">Back to the Main Page</a>
		</center>
	</body>
</html>
