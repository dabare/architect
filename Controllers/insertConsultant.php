<?php

include ('../db/dbConnection.php');

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];

$nic = $_POST['nic'];
$add_no = $_POST['add_no'];
$add_street = $_POST['add_street'];
$add_city = $_POST['add_city'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$land_no = $_POST['land_no'];
$psswd = $_POST['psswd'];
$category = $_POST['cat'];

$id = 0;

$userId = mysqli_query($conn, "SELECT max(`id`) as x FROM `consultants`");

while ($rw = mysqli_fetch_assoc($userId)) {
    $id = $rw["x"];
}
$id = $id + 1;
$location = "6.932904, 79.851476";

if (isset($_POST['submit'])) {
    //$res = mysqli_query($conn, "select count (*) from consultants where email='" . $email . "'");
    //echo $res;
    //$count = mysqli_fetch_array($conn, $res);
    //echo $count;
    $sel_consult = "select * from consultants where email='$email' OR nic='$nic'";
    $sel_cus = "select * from customer where email='$email' OR nic='$nic' ;";
    $sel_arch = "select * from architect where email='$email' OR nic='$nic' ;";

    $run_consult = mysqli_query($conn, $sel_consult);
    $run_cus = mysqli_query($conn, $sel_cus);
    $run_arch = mysqli_query($conn, $sel_arch);

    $check_consult = mysqli_num_rows($run_consult);
    $check_cus = mysqli_num_rows($run_cus);
    $check_arch = mysqli_num_rows($run_arch);


    if ($check_cus== 0 && $check_consult== 0 && $check_arch== 0) {
        //echo "test";
        $sql = "INSERT INTO consultants (id,fname, mname, lname, nic, add_no, add_street, add_city, email, mobile_no, land_no, psswd, created, uname,status,category,location)VALUES ('$id','$fname', '$mname', '$lname', '$nic', '$add_no', '$add_street', '$add_city', '$email', '$mobile_no', '$land_no', '$psswd',NOW(),'$email','inactive','$category','$location')";
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('Consultant Details Inserted'); </script>";
            echo "<script> window.location.href='..'; </script>";
        } else {
            echo mysqli_error($conn);
        }
        //header('Location: index.php');
        //$duplicate = false;
        echo "$sql";
    } else {
        //$duplicate = true;
        echo "<script> alert('User Already Exist'); </script>";
        echo "<script> window.location.href='..'; </script>";
    }
}
?>