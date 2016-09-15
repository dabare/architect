<?php 
	require_once 'db/dbConnection.php';

	if (isset($_GET['empid'])) {
		$employeeid = $_GET['empid'];

		$sql = "DELETE FROM employee WHERE employee_id='".$employeeid."'";

		if (mysqli_query($conn,$sql)) {
			echo '<script>
				alert("employee removed");
				window.location ="viewallemployees.php";
			</script>';
		}
	}
 ?>