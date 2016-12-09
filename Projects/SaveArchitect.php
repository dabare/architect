<?php

require_once '../db/dbConnection.php';

$architectid = $_POST['aid'];
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

$uname = $_POST['uname'];
$password = $_POST['passwd'];


$sql = "UPDATE architect SET fname='" . $firstname . "' , mname = '" . $middlename . "' , lname = '" . $lastname . "', age = '" . $age . "', add_no = '" . $no . "', add_street ='" . $street . "', add_city ='" . $city . "', email='" . $email . "', mobile_no = '" . $mobile . "', land_no = '" . $land . "', passwd = '" . $password . "', uname = '" . $uname . "' WHERE id='" . $architectid . "'";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Architect Details Updated");
				window.location = "../ArchitectEditProfile.php?id=' . $architectid . '";
			</script>';
} else {
	echo mysqli_error($conn);
    echo '<script>
				alert("Save Failed");
				window.location = "../ArchitectEditProfile.php?id=' . $architectid . '" ;
			</script>';
}
mysqli_close($conn);

?>