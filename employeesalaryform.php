<?php 
		
	$employeeid = $_GET['empid'];
	$employeename = $_GET['empname'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>employee salary</title>
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
	input[type=text],input[type=number],input[type=tel],input[type=date]{
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
			
		}
		function confirm() {
			window.location = "newemployeeform.php";
		}
		function getsalary() {
			var basic = document.employee.basicsalary.value.parseFloat();
			var allowance = document.employee.allowance.value.parseFloat();
			var reduction = document.employee.reduction.value.parseFloat();

			var netsalary = (basic+allowance)-reduction;
			alert(netsalary.toString());
			document.employee.netsalary.value = netsalary.toString();
		}
	</script>
</head>
<body>
	<div id="header">
<h1>Employee Salary</h1>
</div>
<center>
<div>
	<div id="topic">
		<h2>Employee Salary</h2>
	</div>
	<div id="form">
	<form action=employeesalary.php	method="post" name="employee" onsubmit="validation()">
		<table>
			<tr><td><label for="employeename">Employee Id</label></td></tr>
			<tr><td><input type="text" name="employeeid" value=<?php echo "E000:".$employeeid; ?> required readonly></td></tr>
			<tr><td><label for="employeename">Employee Name</label></td></tr>
			<tr><td><input type="text" name="employeename" value=<?php echo "$employeename"; ?> required></td></tr>
			<tr><td><label for="employeename">Basic Salary</label></td></tr>
			<tr><td><input type="number" name="basicsalary" required></td></tr>
			<tr><td><label for="employeename">Allowance</label></td></tr>
			<tr><td><input type="number" name="allowance" required></td></tr>
			<tr><td><label for="employeename">Reduction</label></td></tr>
			<tr><td><input type="number" name="reduction" required></td></tr>
			<tr><td><label for="employeename"  readonly>Net Salary</label></td></tr>
			<tr><td><input type="number" name="netsalary" onemptied="getsalary()" required></td></tr>
			<tr><td><label for="employeename">Start Date</label></td></tr>
			<tr><td><input type="date" name="startdate" required></td></tr>
			<tr><td><label for="employeename">End Date</label></td></tr>
			<tr><td><input type="date" name="enddate" required></td></tr>
			<tr><td><input type="submit" name="submit" value="CONFIRM"></td></tr>
			<tr><td><input type="reset" name="reset" value="CANCEL"></td></tr>
		
		</table>
	</form>

	</div>
	<a href="../../index.php">Home</a>
</div>
</center>
</body>
</html>