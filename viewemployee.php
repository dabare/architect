<!DOCTYPE html>
<html>
<head>
	<title>view employee</title>
	<style type="text/css">
		#header{
		background-color: #1a1aff ;
		color: white;
		border-radius: 5px;
	}
	#header h1{
		margin-left: 10px;
	}
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

	</style>
</head>
<body>
<div id="header">
<h1>Employee</h1>
</div>
<?php 
	
	require_once 'db/dbConnection.php';

	$employeeid = $_GET['empid'];

	$sql = "SELECT * FROM employee WHERE employee_id='".$employeeid."'";

	$res = mysqli_query($conn,$sql);

		if (mysqli_num_rows($res)>0) {
			echo "<center>
			<h1>Employee Details</h1>
			<table>
			<tr><th>Employee Id</th>
			<th>Employee Name</th>
			<th>Employee Address</th>
			<th>Employee Contact</th>
			</tr>
			";
		while ($row = mysqli_fetch_assoc($res)) {
			echo "<tr>
				<td>E000:".$row['employee_id']."</td>
				<td>".$row['employee_name']."</td>
				<td>".$row['employee_address']."</td>
				<td>".$row['employee_contact']."</td>
			</tr>";
		}
		echo "</table>";
	}

	

	mysqli_close($conn);

 ?>

</body>
</html>