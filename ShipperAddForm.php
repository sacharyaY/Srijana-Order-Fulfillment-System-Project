<!DOCTYPE html>
<html>
	<head>
    	<title> ShipperAddForm.php</title>
    </head>
	<body bgcolor="#bbccaa">
		<br/><br/><br/><br/>
		<center>
		<table border=2 width=400>
		<form method="post" action="ShipperAddAction.php">
			<tr bgcolor=#88ccaa>
				<th colspan=2>
					<h3>Add New Shipper</h3>
				</th>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Shipper ID
				</td>
				<td>
					<input type="text" name="ID" size="2"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Company Name
				</td>
				<td>
					<input type="text" name="CompanyName" size="30"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Phone
				</td>
				<td>
					<input type="text" name="Phone" size="12"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=right>
					<input type="submit" value="Add"/>
				</td>
				<td align=left>
					<input type="Reset" value="clear"/>
				</td>
			</tr>
		</form>
		</table>
		<a href="Shippers.php">Back to the Main Page</a>
		<center>
	</body>
</html>
