<?php

require_once '../db/dbConnection.php';
$projectid = $_POST['prid'];

$sql = "UPDATE g_project SET status='Inactive' WHERE id='" . $projectid . "';";

if (mysqli_query($conn, $sql)) {

    echo '<script>
				alert("Project Deleted");
				window.location = "../gallery.php";
				
			</script>';
} else {
    echo '<script>
				alert("Project not Deleted");
                                window.location = "../gallery1.php?id=' . $projectid . '";
			</script>';
}
mysqli_close($conn);
?>