<?php

require_once '../db/dbConnection.php';

$consultantid = $_POST['conid'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$no = $_POST['no'];
$street = $_POST['street'];
$city = $_POST['city'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$land = $_POST['land'];
$nic = $_POST['nic'];
$description = $_POST['cdes'];

$sql = "UPDATE consultants SET fname='" . $firstname . "' , mname = '" . $middlename . "' , lname = '" . $lastname . "', age = '" . $age . "', add_no = '" . $no . "', add_street ='" . $street . "', add_city ='" . $city . "', email='" . $email . "', mobile_no = '" . $mobile . "', land_no = '" . $land . "', nic = '" . $nic . "', description = '" . $description . "'  WHERE id='" . $consultantid . "'";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Cnsultant Details Updated");
				window.location = "../ConsultantEditProfile1.php?id=' . $consultantid . '";
			</script>';
} else {
	echo mysqli_error($conn);
    echo '<script>
				alert("Save Failed");
				window.location = "../ConsultantEditProfile1.php?id=' . $consultantid . '";
			</script>';
}
mysqli_close($conn);

?>