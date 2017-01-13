<?php

require_once '../db/dbConnection.php';
$consultant_id = $_POST["consultant_id"];
$project_id = $_POST["project_id"];
echo $consultant_id;
echo $project_id;

$sql = "DELETE FROM consultant_assign where consultant_id = '$consultant_id' and project_id = '$project_id'";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Consultant Removed");
				window.location = "../ArchitectViewProject.php?id=' . $project_id . '";
			</script>';
} else {
    echo '<script>
				alert("Error Occured");
				window.location = "../ArchitectViewProject.php?id=' . $project_id . '";
			</script>';
}
mysqli_close($conn);
?>
