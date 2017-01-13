<?php

require_once '../db/dbConnection.php';
$consultant_id = $_POST['consultant_id'];
$project_id = $_POST['project_id'];
$status = $_POST['status'];

$sql = "UPDATE consultant_assign SET status='" . $status . "'   WHERE consultant_id='" . $consultant_id . "' and project_id='".$project_id."'";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Project Updated");
				window.location = "../ConsultantsAssignedProjects.php";
			</script>';
} else {
    echo '<script>
				alert("Project Not Updated");
				window.location = "../ConsultantsAssignedProjects.php";
			</script>';
}
mysqli_close($conn);
?>