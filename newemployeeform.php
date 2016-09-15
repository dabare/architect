<!DOCTYPE html>
<html>
<head>
	<title>new employee</title>
	<style type="text/css">
	#header{
		background-color: #1a1aff ;
		color: white;
		border-radius: 5px;
	}
	#header h1{
		margin-left: 10px;
	}
	body{
	
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

	input[type=file] {
    width: 100%;
    background-color: #007acc;
    color: white;

	}

	input[type=file]:hover {
    	background-color: #99d6ff;
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
			if (document.employee.FileToUpload.value == "") {
				alert("please upload image");
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
<h1>New Employee</h1>
</div>
<center>
<div>
	<div id="topic">
		<h2>Register Form</h2>
	</div>
	<div id="form">
	<form action="newemployee.php" method="post" name="employee" onsubmit="validation()" enctype="multipart/form-data">
		<table>
			<tr><td><label for="employeename">Employee Name</label></td></tr>
			<tr><td><input type="text" name="employeename" required></td></tr>
			<tr><td><label for="employeename">Employee Address</label></td></tr>
			<tr><td><textarea cols="67" rows="5" name="employeeaddress" required></textarea></td></tr>
			<tr><td><label for="employeename">Employee Contact</label></td></tr>
			<tr><td><input type="tel" name="employeecontact" required></td></tr>
			<tr><td><label for="employeeimage">Employee Image</label></td></tr>
			<tr><td><input type="file" name="FileToUpload"></td></tr>
			<tr><td><input type="submit" name="submit" value="REGISTER"></td></tr>
			<tr><td><input type="reset" name="reset" value="CANCEL"></td></tr>
		
		</table>
	</form>

	</div>
	<a href="../../index.php">Home</a>
</div>
</center>
</body>
</html>