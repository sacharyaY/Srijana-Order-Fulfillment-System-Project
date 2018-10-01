<!DOCTYPE html>
<html>
	<head>
    	<title> SA_EmployeeAddForm.php</title>
    </head>
	<body bgcolor="#bbccaa">
		<br/><br/><br/><br/>
		<center>
		<table border=2 width=400>
		<form method="post" action="SA_EmployeeAddAction.php">
			<tr bgcolor=#88ccaa>
				<th colspan=2>
					<h3>Add New Employee</h3>
				</th>
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
				<td align=left>
					Employee Fname
				</td>
				<td>
					<input type="text" name="EmployeeFname" size="10"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Lname
				</td>
				<td>
					<input type="text" name="EmployeeLname" size="12"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee Password
				</td>
				<td>
					<input type="text" name="EmployeePassword" size="8"/>
				</td>
			</tr>
			<tr bgcolor=#88ccaa>
				<td align=left>
					Employee  Email
				</td>
				<td>
					<input type="text" name="EmployeeEmail" size="15"/>
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
		<a href="SA_Employees.php">Back to the Main Page</a>
		<center>
	</body>
</html>
