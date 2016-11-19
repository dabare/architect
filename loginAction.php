<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();

// establishing the MySQLi connection


require_once './db/dbConnection.php';


// checking the user

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['usrname']);

    $password = mysqli_real_escape_string($conn, $_POST['pswrd']);

    //search architect

    $sel_archi = "select * from architect where uname='$username' AND passwd='$password'";

    $run_archi = mysqli_query($conn, $sel_archi);

    $check_archi = mysqli_num_rows($run_archi);

    //search consultant

    $sel_consult = "select * from consultants where uname='$username' AND psswd='$password'";

    $run_consult = mysqli_query($conn, $sel_consult);

    $check_consult = mysqli_num_rows($run_consult);

    //search employee

    $sel_emp = "select * from employee where uname='$username' AND passwd='$password'";

    $run_emp = mysqli_query($conn, $sel_emp);

    $check_emp = mysqli_num_rows($run_emp);

    //search customer

    $sel_customer = "select * from customer where uname='$username' AND passwd='$password'";

    $run_customer = mysqli_query($conn, $sel_customer);

    $check_customer = mysqli_num_rows($run_customer);

    //check architect

    if ($check_archi > 0) {

        $sql = "SELECT id from architect WHERE uname='" . $username . "';";
        $result = $conn->query($sql);

        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row["id"];
                
            }
        }


        echo "<script>window.open('ArchitectOnGoingProjects.php','_self')</script>";
    }

    //check consultant
    elseif ($check_consult > 0) {
        $sql = "SELECT id from consultants WHERE uname='" . $username . "';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row["id"];
            }
        }

        echo "<script>window.open('ConsultantEditProfile1.php','_self')</script>";
    }

    //check employee
    elseif ($check_emp > 0) {
        $sql = "SELECT id from employee WHERE uname='" . $username . "';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row["id"];
            }
        }
        echo "<script>window.open('EmployeeEditProfile.php','_self')</script>";
    }

    //check customer
    elseif ($check_customer > 0) {
        $sql = "SELECT id from customer WHERE uname='" . $username . "';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row["id"];
            }
        }
        echo "<script>window.open('CustomerEditProfile1.php','_self')</script>";
    } else {

        echo "<script>alert('Email or password is not correct, try again!')</script>";
        echo "<script>window.open('index.php#login','_self')</script>";
    }
    
}
?>