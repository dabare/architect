<?php

include ('../db/dbConnection.php');


$cusid = $_POST['cusid'];
$category = $_POST['category'];
$pdate = $_POST['pdate'];
$location = $_POST['location'];
$status = $_POST['status'];
$url = $_POST['url'];
$description = $_POST['description'];
$progress = $_POST['progress'];
$estimated_duration = $_POST['estimated_duration'];
$estimated_cost = $_POST['estimated_cost'];
$city = $_POST['city'];
$title = $_POST['title'];

$customer_id = $cusid;                              
$architect_id = 1;
$id = 0;

$projId = mysqli_query($conn, "SELECT max(`id`) as x FROM `project`");

while ($rw = mysqli_fetch_assoc($projId)) {
    $id = $rw["x"];
}
$id = $id + 1;


if (isset($_POST['submit'])) {
    $res = mysqli_query($conn, "select count (*) from project where title='" . $title . "'");
    //echo $res;
    $count = mysqli_fetch_array($conn, $res);
    //echo $count;
    if ($count[0] == 0) {
        //echo "test";
        $sql = "INSERT INTO project (id, customer_id, architect_id, category, pdate, location, status, url, description, progress, estimated_duration, estimated_cost, city, title)VALUES ('$id', '$customer_id', '$architect_id', '$category', '$pdate', '$location', 'Active', '$url', '$description', '2', '$estimated_duration', '$estimated_cost', '$city', '$title')";
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('New Project Inserted'); </script>";
            echo "<script> window.location.href='../ArchitectCustomers.php'; </script>";
        } else {
            echo "<script> alert('Project not inserted'); </script>";
        }
        //header('Location: index.php');
        //$duplicate = false;
        echo "$sql";
    } else {
        //$duplicate = true;
        echo "<script> alert('Project data not insert'); </script>";
    }
}
?>