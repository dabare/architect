<?php
session_start();
require_once '../db/dbConnection.php';

    
    $id = $_SESSION["id"];
    $fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$lname=$_POST["lname"];
	$age=$_POST["age"];
	$add_no=$_POST["add_no"];
	$add_street=$_POST["add_street"];
	$add_city=$_POST["add_city"];
	$email=$_POST["email"];
	$mobile_no=$_POST["mobile_no"];
	$land_no=$_POST["land_no"];
	$nic=$_POST["nic"];
	
    
    $uname = $_POST["uname"];
    $location = $_POST["location"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

$target_dir = "../uploads/consultant/";

$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir .  $id . '.jpeg' ;


if($pass1==$pass2){
    
    if ($uploadOk == 0) {
    echo '<script>
					alert("Photo uploading failed");
					 window.location = "../editConsultantProfile.php";
				</script>';
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) || $_FILES["image"]["name"]==0) {
        
            
        $sql = "UPDATE consultants SET fname='" . $fname . "' , mname = '" . $mname . "' , lname = '" . $lname . "', age = '" . $age . "', add_no = '" . $add_no . "', add_street ='" . $add_street . "', add_city ='" . $add_city . "', email='" . $email . "', mobile_no = '" . $mobile_no . "', land_no = '" . $land_no . "', nic = '" . $nic . "',
     uname = '" . $uname . "' , psswd = '" . $pass2 . "' , location = '" . $location . "' WHERE id='" . $id . "'";
    if (mysqli_query($conn, $sql)) {

        echo '<script>
                    alert("Profile Updated");
                    window.location = "../editConsultantProfile.php";
                </script>';
    } else {
        echo '<script>
                    alert("Update Failed");
                    window.location = "../editConsultantProfile.php";
                </script>';
    }
    
        
    }else{
        echo '<script>
					alert("Photo uploading failed");
					 window.location = "../editConsultantProfile.php";
				</script>';
    }
}
    
    

}else{
    echo '<script>
                    alert("Password did not match");
                    window.location = "../editConsultantProfile.php";
                </script>';
}

mysqli_close($conn);

?>