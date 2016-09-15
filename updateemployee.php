<?php 
	require_once 'db/dbConnection.php';

	$employeeid = $_POST['employeeid'];
	$employeename = $_POST['employeename'];
	$employeeaddress = $_POST['employeeaddress'];
	$employeecontact = $_POST['employeecontact'];
	$employeeid = explode(':', $employeeid);
	


	$sql  = "UPDATE employee SET employee_name='".$employeename."',employee_address='".$employeeaddress."',employee_contact='".$employeecontact."' WHERE employee_id='".$employeeid[1]."'";

	if (mysqli_query($conn,$sql)) {
	
		echo '<script>
				alert(" employee updated");
				window.location = "viewallemployees.php";
			</script>';
	}else{
		echo '<script>
				alert(" employee not updated");
				window.location = "updateemployeeform.php";
			</script>';
	}

 ?>