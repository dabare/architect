<?php

require_once '../db/dbConnection.php';



$consultantid = $_POST['consulid'];
$payment = $_POST['payment'];
$status = $_POST['status'];

if($status == "on"){
    $status = "active";
}else{
    $status = "inactive";
}



$sql = "UPDATE consultants SET status='$status' , payment= '$payment' WHERE id='" . $consultantid . "';";
if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Consultant Details Updated");
				window.location = "../ArchitectViewConsultant.php?id=' . $consultantid . '";
			</script>';
} else {
    echo '<script>
				alert("Update Failed");
				window.location = "../ArchitectViewConsultant.php?id=' . $consultantid . '";
			</script>';
}

mysqli_close($conn);
?>
