<?php


session_start();
require_once '../db/dbConnection.php';
$_SESSION["id"] = 1;

$cusid = $_POST['cusid'];
$category = $_POST['category'];
$pdate = $_POST['pdate'];
$location = $_POST['location'];
$status = "Active";
$url = "";
$description = $_POST['description'];
$progress = "2";
$estimated_duration = $_POST['estimated_duration'];
$estimated_cost = $_POST['estimated_cost'];
$city = $_POST['city'];
$title = $_POST['title'];
$priority = $_POST['priority'];

$customer_id = $cusid;                              
$architect_id = $_SESSION["id"];
$id = 0;

$projId = mysqli_query($conn, "SELECT max(`id`) as x FROM `project`");

while ($rw = mysqli_fetch_assoc($projId)) {
    $id = $rw["x"];
}
$id = $id + 1;

    $res = mysqli_query($conn, "select count (*) from project where title='" . $title . "'");
    //echo $res;
    $count = mysqli_fetch_array($conn, $res);
    //echo $count;
    if ($count[0] == 0) {
        //echo "test";
        $sql = "INSERT INTO project VALUES ('$id', '$customer_id', '$architect_id', '$category', '$priority' ,'$pdate', 'Active', '$location', '$description', '2', '$estimated_duration', '$estimated_cost', '$city', '$title');";
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('New Project Inserted'); </script>";
            echo "<script> window.location.href='../ArchitectViewProject.php?id=".$id."'; </script>";
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



?>