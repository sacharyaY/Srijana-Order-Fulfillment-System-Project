<!DOCTYPE html>
<html>
	<head>
    	<title> SA_CustomerAddForm.php</title>
    </head>
	<body bgcolor="#bbccaa">
		<br/><br/><br/><br/>
		<center>
		<table border=2 width=400>
		<form method="post" action="SA_CustomerAddAction.php">
			<tr bgcolor=#88ccaa>
				<th colspan=2>
					<h3>Add New Customer</h3>
				</th>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer ID
				</td>
				<td>
					<input type="text" name="CustomerID" size="5"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Fname
				</td>
				<td>
					<input type="text" name="CustomerFname" size="10"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Lname
				</td>
				<td>
					<input type="text" name="CustomerLname" size="12"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer Password
				</td>
				<td>
					<input type="text" name="CustomerPassword" size="8"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer  Email
				</td>
				<td>
					<input type="text" name="CustomerEmail" size="15"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer  Address
				</td>
				<td>
					<input type="text" name="CustomerAddress" size="30"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer  City
				</td>
				<td>
					<input type="text" name="CustomerCity" size="12"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer  State
				</td>
				<td>
					<input type="text" name="CustomerState" size="2"/>
				</td>
			</tr>
			
			<tr bgcolor=#88ccaa>
				<td align=left>
					Customer  ZipCode
				</td>
				<td>
					<input type="text" name="CustomerZip" size="9"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Locked Flag
				</td>
				<td>
					<input type="text" name="LockedFlag" size="1"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee ID
				</td>
				<td>
					<input type="text" name="EmployeeID" size="3"/>
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
		<a href="SA_Customers.php">Back to the Main Page</a>
		<center>
	</body>
</html>
