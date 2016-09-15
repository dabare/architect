<?php 
		
		require_once 'db/dbConnection.php';
		if (isset($_GET['id'])) {
			$employeeid = $_GET['id'];
		}

		$sql = "SELECT * FROM employee WHERE employee_id='".$employeeid."'";

		$res = mysqli_query($conn,$sql);

		if (mysqli_num_rows($res)>0) {
			while ($row = mysqli_fetch_assoc($res)) {
				$employeename = $row['employee_name'];
				$employeeaddress = $row['employee_address'];
				$employeecontact = $row['employee_contact'];
				$employeeimage = $row['employee_image'];
			}
		}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>update employee</title>
	<style type="text/css">
	#header{
		background-color: #1a1aff ;
		color: white;
		border-radius: 5px;
	}
	#header h1{
		margin-left: 10px;
	}
	
	#topic{
		background-color: #1aa3ff;
		width: 500px;
		color: white;
		border-radius: 5px;
	}
	input[type=text]{
		width: 493px;
    	box-sizing: border-box;
    	padding: 8px 20px;
    	
	}
	input[type=tel]{
		width: 493px;
    	box-sizing: border-box;
    	padding: 8px 20px;
	}

	input[type=submit] {
    	width: 100%;
    	background-color: #007acc;
    	color: white;
    	font-size: 40px;
    	border-style: none;
    	cursor: pointer;
    	margin-top: 20px;
    	border-radius: 5px;

	}

	input[type=submit]:hover {
    	background-color: #99d6ff;
	}
	input[type=reset] {
    	width: 100%;
    	background-color: #ff0000 ;
    	color: white;
    	font-size: 40px;
    	border-style: none;
    	cursor: pointer;
    	margin-top: 20px;
    	margin-bottom: 10px;
    	border-radius: 5px;

	}

	input[type=reset]:hover {
    	background-color: #ff9999 ;
	}
	
	a{
	margin-top: 10px;
	background-color:  #0000b3;
	font-size: 30px;
	padding-left: 10px;
	padding-right: 10px;
	text-align: center;
	text-decoration: none;
	padding-bottom: 3px;
	color: white;
	margin-left: 10px;
	margin-right: 10px;
	border-radius: 5px;
	
	}
	a:hover{
		background-color: #8080ff ;
	}

	
	</style>
	<script type="text/javascript">
		function validation() {
			if (document.employee.employeename.value == "") {
				alert("please Enter name");
				confirm();

			}
			if (document.employee.employeeaddress.value == "") {
				alert("please Enter address");
				confirm();
			}
			if (document.employee.employeecontact.value == "") {
				alert("please Enter Contact");
				confirm();
			}
			
		}
		function confirm() {
			window.location = "newemployeeform.php";
		}
	</script>
</head>
<body>
	<div id="header">
<h1>Update Employee</h1>
</div>
<center>
<div>
	<div id="topic">
		<h2>Upate Employee</h2>
	</div>
	<div id="form">
	<form action=updateemployee.php	method="post" name="employee" onsubmit="validation()">
		<table>

			<tr><td><img src=<?php echo "$employeeimage"; ?> alt=noimage width=500 height=250></td></tr>
			<tr><td><label for="employeename">Employee Id</label></td></tr>
			<tr><td><input type="text" name="employeeid" value=<?php echo "E000:".$employeeid; ?> required readonly></td></tr>
			<tr><td><label for="employeename">Employee Name</label></td></tr>
			<tr><td><input type="text" name="employeename" value=<?php echo "$employeename"; ?> required></td></tr>
			<tr><td><label for="employeename">Employee Address</label></td></tr>
			<tr><td><textarea cols="67" rows="5" name="employeeaddress" required><?php echo "$employeeaddress"; ?></textarea></td></tr>
			<tr><td><label for="employeename">Employee Contact</label></td></tr>
			<tr><td><input type="tel" name="employeecontact" value=<?php echo "$employeecontact"; ?> required></td></tr>
			<tr><td><input type="submit" name="submit" value="UPDATE"></td></tr>
			<tr><td><input type="reset" name="reset" value="CANCEL"></td></tr>
		
		</table>
	</form>

	</div>
	<a href="../../index.php">Home</a>
</div>
</center>
</body>
</html>