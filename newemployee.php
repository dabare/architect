<?php 
		require_once 'db/dbConnection.php';
		
		$employeename = $_POST['employeename'];
		$employeeaddress = $_POST['employeeaddress'];
		$employeecontact = $_POST['employeecontact'];
		

		$target = "uploads/";
   		$target = $target .basename( $_FILES['FileToUpload']['name']);
    	$images=($_FILES['FileToUpload']['name']);	

    	$sql = "INSERT INTO employee(employee_name,employee_address,employee_contact,employee_image) VALUES('".$employeename."','".$employeeaddress."','".$employeecontact."','".$target."')";

        if (mysqli_query($conn,$sql)) {
        	if (move_uploaded_file($_FILES["FileToUpload"]["tmp_name"], $target)) {
        		echo '<script>
					alert("new employee registered");
					window.location="viewallemployees.php";
				</script>';
    		}else {
        		echo "Sorry, there was an error uploading your file.";
    		}
        		
        }else{
        	echo '<script>
				alert("new employee not registered");
			</script>';
        }
        mysqli_close($conn);

 ?>