<?php

require_once '../db/dbConnection.php';


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
$passwd = $_POST['passwd'];


$id = 0;
$location = "6.932904, 79.851476";

$userId = mysqli_query($conn, "SELECT max(`id`) as x FROM `customer`");

while ($rw = mysqli_fetch_assoc($userId)) {
    $id = $rw["x"];
}
$id = $id + 1;


if (isset($_POST['submit'])) {
   // $res = mysqli_query($conn, "select count (*) from customer where email='" . $email . "'");
    //echo $res;
   // $count = mysqli_fetch_array($conn, $res);

    $sel_customer = "select * from customer where email='$email' OR nic='$nic' ;";
    $sel_consultant = "select * from consultants where email='$email' OR nic='$nic' ;";
    $sel_architect = "select * from architect where email='$email' OR nic='$nic' ;";
    // $sel_customer = "select * from customer inner join consultant on consultant.email=customer.email inner join architect on architect.email=customer.email where customer.email='$email' ;";

    $run_customer = mysqli_query($conn, $sel_customer);
    $run_consultant = mysqli_query($conn, $sel_consultant);
    $run_architect = mysqli_query($conn, $sel_architect);

    $check_customer = mysqli_num_rows($run_customer);
    $check_consultant = mysqli_num_rows($run_consultant);
    $check_architect = mysqli_num_rows($run_architect);
    //echo $count;
    if ($check_customer== 0 && $check_consultant== 0 && $check_architect== 0) {
        //echo "test";
        $sql = "INSERT INTO customer (id,fname, mname, lname, nic, add_no, add_street, add_city, email, mobile_no, land_no, passwd, created, uname, location)VALUES ('$id','$fname', '$mname', '$lname', '$nic', '$add_no', '$add_street', '$add_city', '$email', '$mobile_no', '$land_no', '$passwd',NOW(),'$email','$location' )";
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('User Inserted'); </script>";
            echo "<script> window.location.href='..'; </script>";
        } else {
            echo "<script> alert('user not inserted'); </script>";
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