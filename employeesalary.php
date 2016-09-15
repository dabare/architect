<?php 
		require_once '../db/dbConnection.php';
		$employeeid = $_POST['employeeid'];
		$employeeid = explode(':', $employeeid);
		$basicsalary = $_POST['basicsalary'];
		$allowance = $_POST['allowance'];
		$reduction = $_POST['reduction'];
		$netsalary = $_POST['netsalary'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];

    	$sql = "INSERT INTO payment(employee_id,payment_basic,payment_allowance,payment_reduction,payment_salary,payment_start_date,payment_end_date) VALUES('".$employeeid[1]."','".$basicsalary."','".$allowance."','".$reduction."','".$netsalary."','".startdate."','".$enddate."')";

        if (mysqli_query($conn,$sql)) {
        	
        		echo '<script>
					alert("employee salary entered");
					window.location="viewallemployees.php";
				</script>';
    			
        }else{
        	echo '<script>
				alert("employee salary not entered");
			</script>';
        }
        mysqli_close($conn);

 ?>