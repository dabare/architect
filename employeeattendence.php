<?php 
		require_once '../db/dbConnection.php';
		$employeeid = $_POST['employeeid'];
		$employeeid = explode(':', $employeeid);
		$attendence = $_POST['attendence'];
		$absent = $_POST['absent'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];

    	$sql = "INSERT INTO attendence(employee_id,attendence_start_month,attendence_end_month,attendence_count,absent_count) VALUES('".$employeeid[1]."','".$startdate."','".$enddate."','".$attendence."','".$absent."')";

        if (mysqli_query($conn,$sql)) {
        	
        		echo '<script>
					alert("employee attendence entered");
					window.location="viewallemployees.php";
				</script>';
    			
        }else{
        	echo '<script>
				alert("employee attendence not entered");
			</script>';
        }
        mysqli_close($conn);

 ?>