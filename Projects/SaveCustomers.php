<?php

require_once '../db/dbConnection.php';

$customerid = $_POST['cusid'];
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
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE customer SET fname='" . $firstname . "' , mname = '" . $middlename . "' , lname = '" . $lastname . "', age = '" . $age . "', add_no = '" . $no . "', add_street ='" . $street . "', add_city ='" . $city . "', email='" . $email . "', mobile_no = '" . $mobile . "', land_no = '" . $land . "', nic = '" . $nic . "', uname = '" . $username . "', passwd = '" . $password . "'  WHERE id='" . $customerid . "'";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Customer Details Updated");
				window.location = "../CustomerEditProfile1.php?id=' . $customerid . '";
			</script>';
} else {
	echo mysqli_error($conn);
    echo '<script>
				alert("Save Failed");
				window.location = "../CustomerEditProfile1.php?id=' . $customerid . '";
			</script>';
}
mysqli_close($conn);

?>