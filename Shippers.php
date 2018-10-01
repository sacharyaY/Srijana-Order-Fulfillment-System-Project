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
	$sqlString = "SELECT ShipperID, CompanyName, Phone FROM Shipper";
	
	// Run the query using the connection established earlier and assign the results to a results object.
	$rs = mysqli_query ($con  , $sqlString);
?>
<!DOCTYPE html>
<html>
	<head>
    	<title> Shippers.php </title>
	</head>
	<body bgcolor="#bbccaa">
	<?php include ("SA_menu.php"); ?>
		<br/><br/><br/><br/>
		<center>
		<table border="2" width="500">
			<tr bgcolor=#88ccaa>
				<th  colspan=5>
					<h3>Shippers List</h3>
				</th>
			<tr bgcolor=#88ccaa>
				<th align=center>
					Shipper ID
				</th>
				<th align=center>
					Company Name
				</th>
				<th align=center>
					Phone
				</th>
				<th></th>
				<th></th>
			</tr>

		<?php
			// While there is another record in the result object, fetch it
			while ($row = mysqli_fetch_array ($rs))
			{
				echo("<tr bgcolor=#88ccaa><td align=center>");
				echo($row["ShipperID"]);
				echo("</td><td>");
				echo($row["CompanyName"]);
				echo("</td><td>");
				echo($row["Phone"]);				
		?>
				</td>
				<td>
					<a href=ShipperEditForm.php?sid=<?php echo($row["ShipperID"]); ?>>Edit</a>
				</td>
				<td>
					<a href=ShipperDelete.php?sid=<?php echo($row["ShipperID"]); ?>>Delete</a>
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
				<td align=center colspan=5>
					<a href="ShipperAddForm.php">Add New Shipper</a>
				</td>
			</tr>
		</table>
		</center>
	</body>
</html>

